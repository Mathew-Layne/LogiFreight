<?php

namespace App\Http\Livewire;

use App\Models\Package;
use Livewire\Component;

class Items extends Component
{
    public $addPackage = false;
    public $editPackage =  false;

    public function render()
    {
        Package::paginate(5);
        return view('livewire.items');
    }
}
