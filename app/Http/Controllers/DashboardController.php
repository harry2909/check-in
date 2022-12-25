<?php

namespace App\Http\Controllers;

use App\Models\EmojiCalendar;
use App\Models\User;
use App\Models\EmojiRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function index()
    {
        $currentDate = date('Y-m-d', strtotime('today'));
        $emojiRating = EmojiCalendar::where('submission_date', $currentDate)
            ->where('user_id', Auth::id())
            ->first();
        $specificEmoji = EmojiRating::where('id', $emojiRating->emoji_ID)->first();
        $emojiHTML = $specificEmoji->emoji_html;
        return view('dashboard')->with('emojiHTML', $emojiHTML);
    }

}
