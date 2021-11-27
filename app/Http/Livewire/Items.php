<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use App\Models\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{

    use WithPagination;
    public $addPackage = false;
    public $editPackage =  false;
    public $mailBox, $internalTrackingNo;
    


    public function createMailbox(){
        $this->mailBox = "LF".random_int(10002, 99999);
      
    }

    public function createInternalTracking(){
        $this->internalTrackingNo ="ITN-". Str::random(15);
    }
    
    public function render()
    {
       $packages =  Package::all();
    //   
        return view('livewire.items', [
            'packages' => $packages,
        ]);
    }
}
