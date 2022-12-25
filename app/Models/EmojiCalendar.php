<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmojiCalendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'submission_date', 'emoji_ID', 'user_id'
    ];
}
