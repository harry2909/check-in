<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmojiRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'emoji_html',
    ];
}
