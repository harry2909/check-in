<?php

namespace App\Http\Livewire;

use App\Models\EmojiRating;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Success;
use App\Models\EmojiCalendar;

class Statistics extends Component
{
    public $averageEmoji;
    public $commonWords;
    public $averageDay;
    public $totalSuccesses;

    public function render()
    {
        $this->totalSuccesses = Success::where('user_id', Auth::id())->count();
        $emojiRatings = EmojiCalendar::where('user_id', Auth::id())->get();
        if ($emojiRatings) {
            $this->getAverageEmoji($emojiRatings);
        }
        $descriptions = Success::select('description')->where('user_id', Auth::id())->get();
        $this->getCommonWords($descriptions);
        $dates = Success::select('submission_date')->where('user_id', Auth::id())->get();
        $this->getAverageDay($dates);
        return view('livewire.statistics');

    }

    private function getAverageDay($dates)
    {
        // Get average day of submission
        $formattedDates = [];
        foreach ($dates as $date) {
            $formattedDates[] = date('l', strtotime($date->submission_date));
        }
        $dayValues = array_count_values($formattedDates);
        arsort($dayValues);
        return $this->averageDay = array_slice(array_keys($dayValues), 0, 1, true)[0];
    }

    private function getCommonWords($descriptions)
    {
        $splitWords = [];
        foreach ($descriptions as $description) {
            $splitWords[] = preg_split('/[^\w]*([\s]+[^\w]*|$)/', $description->description, -1, PREG_SPLIT_NO_EMPTY);
        }
        $collectedWords = [];
        foreach ($splitWords as $splitWordIndexOne) {
            foreach ($splitWordIndexOne as $splitWordIndexTwo) {
                $collectedWords[] = $splitWordIndexTwo;
            }
        }
        $wordValues = array_count_values($collectedWords);
        arsort($wordValues);
        return $this->commonWords = array_slice(array_keys($wordValues), 0, 5, true);
    }

    private function getAverageEmoji($emojiRatings)
    {
        $formattedEmojis = [];
        foreach ($emojiRatings as $emojiRating) {
            $formattedEmojis[] = $emojiRating->emoji_ID;
        }
        $emojiValues = array_count_values($formattedEmojis);
        arsort($emojiValues);
        $mostCommonEmoji = array_slice(array_keys($emojiValues), 0, 1, true)[0];
        $specificEmoji = EmojiRating::where('id', $mostCommonEmoji)->first();
        return $this->averageEmoji = $specificEmoji->emoji_html;
    }

}
