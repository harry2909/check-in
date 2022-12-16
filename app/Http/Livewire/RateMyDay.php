<?php

namespace App\Http\Livewire;

use App\Models\EmojiCalendar;
use App\Models\EmojiRating;
use App\Models\Success;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RateMyDay extends Component
{
    public int $currentStep = 1;
    public string $currentTime;

    public function render()
    {
        $this->currentTime = Carbon::now()->toDayDateTimeString();
        $emojis = EmojiRating::all();
        return view('livewire.rate-my-day')->with('emojis', $emojis);
    }

    public function firstStepSubmit()
    {
        $this->currentStep = 2;
    }

    public function secondStepSubmit($emojiID)
    {
        if ($emojiID) {
            EmojiCalendar::create([
                'submission_date' => date('Y-m-d', strtotime('today')),
                'emoji_ID' => $emojiID
            ]);
            $this->currentStep = 3;
        }
    }
}
