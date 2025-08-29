<?php

namespace Database\Seeders;

use App\Models\TimeSlot;
use Illuminate\Database\Seeder;

class TimeSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TimeSlot::insert([
            ['name' => '5:30 AM to 8:30 AM'],
            ['name' => '11:00 AM to 2:00 PM'],
            ['name' => '4:30 PM to 7:30 PM'],
        ]);
    }
}
