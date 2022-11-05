<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Success;

class Successes extends Component
{
    public int $currentStep = 1;
    public String $description = '';
    public String $currentTime;
    public function render()
    {
        $this->currentTime = Carbon::now()->toDayDateTimeString();
        return view('livewire.successes');
    }

    public function firstStepSubmit() {
        $this->description = '';
        $this->currentStep = 2;
    }

    public function secondStepSubmit() {
        $validatedData = $this->validate([
            'description' => 'required'
        ]);

        if ($validatedData) {
            Success::create([
                'description' => $this->description
            ]);
            $this->currentStep = 3;
        }

    }
}
