<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Success;
use Illuminate\Support\Facades\Auth;
use NumberFormatter;

class Successes extends Component
{
    public int $currentStep = 1;
    public string $description = '';
    public string $currentTime;
    public int $userId;
    public string $successCount;

    public function render()
    {
        $this->currentTime = Carbon::now()->toDayDateTimeString();
        $successNumber = Success::where('user_id', Auth::id())->count();
        $numberFormatter = new NumberFormatter('en_GB', NumberFormatter::ORDINAL);
        $this->successCount = $numberFormatter->format($successNumber);
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
                'submission_date' => date('Y-m-d', strtotime('today')),
                'user_id' => $this->userId
            ]);
            $this->currentStep = 3;
        }

    }
}
