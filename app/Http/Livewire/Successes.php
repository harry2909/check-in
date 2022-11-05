<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Success;

class Successes extends Component
{
    public int $currentStep = 1;
    public String $description;
    public String $successMessage;

    public function render()
    {
        return view('livewire.successes');
    }

    public function firstStepSubmit() {
        $this->currentStep = 2;
    }
}
