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
            ['type' => '0', 'name' => '6:30 AM to 9:30 AM'],
            ['type' => '0', 'name' => '9:30 AM to 12:30 PM'],
            ['type' => '0', 'name' => '3:00 PM to 6:00 PM'],
            ['type' => '1', 'name' => '7:00 AM to 7:55 AM'],
            ['type' => '1', 'name' => '8:00 AM to 8:55 AM'],
            ['type' => '1', 'name' => '9:00 AM to 9:55 AM'],
            ['type' => '1', 'name' => '10:00 AM to 10:55 AM'],
            ['type' => '1', 'name' => '3:00 PM to 3:55 PM'],
            ['type' => '1', 'name' => '4:00 PM to 4:55 PM'],
            ['type' => '1', 'name' => '5:00 PM to 5:55 PM'],
        ]);
    }
}
