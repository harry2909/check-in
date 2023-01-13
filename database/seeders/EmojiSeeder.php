<?php

namespace Database\Seeders;

use App\Models\EmojiRating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmojiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmojiRating::create(['emoji_html' => '&#128546']);
        EmojiRating::create(['emoji_html' => '&#128532']);
        EmojiRating::create(['emoji_html' => '&#128533']);
        EmojiRating::create(['emoji_html' => '&#128528']);
        EmojiRating::create(['emoji_html' => '&#128578']);
        EmojiRating::create(['emoji_html' => '&#128512']);
        EmojiRating::create(['emoji_html' => '&#128513']);

    }
}
