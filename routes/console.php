<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('dues:generate-monthly')->monthlyOn(1, '00:10');
Schedule::command('dues:send-reminders')->dailyAt('09:00');
