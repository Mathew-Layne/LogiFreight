<?php

namespace App\Http\Livewire;

use App\Models\QuickAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Alerts extends Component
{
    use WithPagination;

    public function render()
    {
        $alerts = QuickAlert::paginate(5);
        return view('livewire.alerts', [
            'alerts' => $alerts,
        ]);
    }
}
