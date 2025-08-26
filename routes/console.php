<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('whatsapp:textMessage')
    ->everyMinute()
    ->withoutOverlapping();

Schedule::command('whatsapp:imageMessage')
    ->everyMinute()
    ->withoutOverlapping();
