<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Success;
use Illuminate\Support\Facades\Auth;

class Successes extends Component
{
    public int $currentStep = 1;
    public string $description = '';
    public string $currentTime;
    public int $userId;

    public function render()
    {
        $this->currentTime = Carbon::now()->toDayDateTimeString();
        return view('livewire.successes');
    }

    public function firstStepSubmit()
    {
        $this->description = '';
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'description' => 'required'
        ]);

        if ($validatedData) {
            $this->userId = Auth::id();
            Success::create([
                'description' => $this->description,
                'user_id' => $this->userId
            ]);
            $this->currentStep = 3;
        }

    }
}
