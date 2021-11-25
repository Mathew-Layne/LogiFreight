<?php

namespace App\Http\Livewire;

use App\Models\QuickAlert;
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

    public function updateAlert(){
        $this->validate();

        $filePath = $this->image->store('invoices', 'public');
         
        dd($filePath);
        QuickAlert::create([
            'user_id' =>auth()->user()->id,
            'courier' => $this->shipper,
            'tracking_no' => $this->trackingNo,
            'description' => $this->description,
            'value'=> $this->value,
            'weight' => $this->weight,
            'invoice' => $filePath,
        ]);  

    }

    public function render()
    {
        return view('livewire.quik-alerts');
    }
}
