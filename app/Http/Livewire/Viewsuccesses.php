<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Success;
use Illuminate\Support\Collection;

class Viewsuccesses extends Component
{

    public Collection $successes;

    public function render()
    {
        $this->successes = collect(Success::all()->where('user_id', Auth::id())->groupBy(function($item) {
            return $item->created_at->toDateString();
        }));
        $this->successes = $this->successes->sortKeys();
        return view('livewire.viewsuccesses');
    }
}
