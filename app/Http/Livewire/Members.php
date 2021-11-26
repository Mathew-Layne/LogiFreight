<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Members extends Component
{
    use WithPagination;
    public $editMember = false;
    public $addMember = false;
    public $first_name, $last_name, $trn, $email, $address, $city, $mailbox, $parish, $phone, $memberId;

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|email|unique,users,email',
        'trn' =>'required',
        'address'=>'required|string',
        'city' =>'required|string',
        'parish' =>'required',
        'phone' =>' required',
    ];

    public function createMember(){
        $this->validate();
        User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'mailbox' => "LF".random_int(10002, 99999),
            'address' => $this->address,
            'city' => $this->city,
            'parish' => $this->parish,
        ]);
        return redirect()->route('members');
    }

    public function viewMember($id)
    {
        $this->editMember = true;
        $singleMember = User::find($id);
        $this->first_name = $singleMember->first_nm;
        $this->last_name = $singleMember->last_nm;
        $this->email = $singleMember->email;
        $this->mailbox = $singleMember->mailbox;
        $this->phone = $singleMember->phone;
        $this->trn = $singleMember->trn;
        $this->address = $singleMember->address;
        $this->city = $singleMember->city;
        $this->parish = $singleMember->parish;
        $this->memberId = $id;
 
    }

    public function updateMember(){
        $this->validate();
        User::where('id', $this->memberId)->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' =>$this->phone,
            'mailbox' => $this->mailbox,
            'address' => $this->address,
            'city'=> $this->city,
            'parish' => $this->parish,
        ]);
        return redirect()->route('members');
    }

    public function render()
    {
        $members = User::where('user_type', 'Member')->paginate(5);
        return view('livewire.members',[
            'members' => $members,
        ]);
    }
}
