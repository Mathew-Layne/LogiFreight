<?php

namespace App\Http\Livewire;

use App\Models\Package;
use App\Models\QuickAlert;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class QuikAlerts extends Component
{
    use WithFileUploads;
    public $addAlert = true;
    public $weight, $trackingNo, $shipper, $value, $image, $description;

    protected $rules = [
        'shipper' => 'required|string',
        'trackingNo' => 'required|string',
        'description' => 'required|string',
        'value' => 'required|numeric',
        'weight' => 'required|numeric',
        'image' => 'required|image|max:1024'
    ];

    public function updateAlert(Request $request){

        $this->validate();
        $filename = $this->image->getClientOriginalName();
        // dd($filename);
        $filePath = $this->image->storeAs('public', $filename);
         
    
        QuickAlert::create([
            'user_id' =>auth()->user()->id,
            'courier' => $this->shipper,
            'tracking_no' => $this->trackingNo,
            'description' => $this->description,
            'value'=> $this->value,
            'weight' => $this->weight,
            'invoice' => $filePath,
        ]);  

        $mailbox =User::where('id', auth()->user()->id)->value('mailbox');

        Package::create([
            'user_id' => auth()->user()->id,
            'package_type_id' => 1,
            'shipper' => $this->shipper,
            'shippers_tracking_no' => $this->trackingNo,
            'estimated_cost' =>$this->value,
            'weight'=> $this->weight,
            'mailbox' =>$mailbox,
        ]);
        return redirect()->route('quickAlerts');

    }

    public function render()
    {
        return view('livewire.quik-alerts');
    }
}
