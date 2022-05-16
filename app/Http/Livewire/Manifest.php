<?php

namespace App\Http\Livewire;

use App\Models\Manifest as ModelsManifest;
use App\Models\Package;
use Livewire\Component;
use Livewire\WithPagination;

class Manifest extends Component
{
    use WithPagination;
    public $addManifest = false;
    public $viewManifest = false;
    public $awb, $startDate, $endDate, $dateReceived, $singleManifest;

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

    public function viewManifest($id){
        $this->viewManifest = true;
      $this->singleManifest = Package::with('user')->where('manifest_id', $id)->get();
    //   dd($this->singleManifest);
    }

    public function render()
    {
        date_default_timezone_set("America/Jamaica");
        return view('livewire.manifest', [
            'manifest' => ModelsManifest::paginate(10),
        ]);
    }
}
