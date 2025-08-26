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
            ['type' => '0', 'name' => '5:30 AM to 8:30 AM'],
            ['type' => '0', 'name' => '11:00 AM to 2:00 PM'],
            ['type' => '0', 'name' => '4:30 PM to 7:30 PM'],
        ]);
    }
}
