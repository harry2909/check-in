<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Success;
use Illuminate\Support\Collection;

class Viewsuccesses extends Component
{

    public Collection $successes;

    public function render()
    {
        $this->successes = collect(Success::all()->groupBy(function($item) {
            return $item->created_at->toDateString();
        }));
        return view('livewire.viewsuccesses');
    }
}
