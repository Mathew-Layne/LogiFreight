<?php

namespace App\Http\Livewire;

use App\Models\Manifest as ModelsManifest;
use Livewire\Component;
use Livewire\WithPagination;

class Manifest extends Component
{
    use WithPagination;
    public $addManifest = false;
    public $awb, $startDate, $endDate, $dateReceived;

    public function createManifest()
    {
        // dd($this->awb);
        ModelsManifest::create([
            'awb' => $this->awb,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'date_received' => $this->dateReceived,
        ]);
        session()->flash('message', 'Manifest created.');
    }

    public function render()
    {
        date_default_timezone_set("America/Jamaica");
        return view('livewire.manifest', [
            'manifest' => ModelsManifest::paginate(10),
        ]);
    }
}
