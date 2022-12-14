<?php

namespace Database\Seeders;

use App\Models\Success;
use Illuminate\Database\Seeder;

class SuccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Success::factory()->count(100)->create();
    }
}
