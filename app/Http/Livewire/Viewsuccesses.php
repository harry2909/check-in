<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Success;

class Viewsuccesses extends Component
{

    public array $successes = [];
    public string $search = '';
    public array $formattedArray = [];

    public function render()
    {
        $this->successes = [];
        $this->formattedArray = [];
        $successData = Success::where('user_id', Auth::id())
            ->where('submission_date', 'like', '%' . $this->search . '%')
            ->get();
        foreach ($successData as $success) {
            $this->formattedArray[$success->submission_date][] = $success;
        }
        $this->successes = $this->formattedArray;
        return view('livewire.viewsuccesses');
    }
}
