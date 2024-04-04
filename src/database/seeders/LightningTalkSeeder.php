<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LightningTalk;

class LightningTalkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LightningTalk::factory()->count(10)->create();
    }
}
