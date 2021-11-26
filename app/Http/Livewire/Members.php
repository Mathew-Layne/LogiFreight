<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Members extends Component
{
    use WithPagination;

    public function render()
    {
        $members = User::where('user_type', 'Member')->paginate(5);
        return view('livewire.members',[
            'members' => $members,
        ]);
    }
}
