<?php

use App\Console\Commands\SendMailCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
 Schedule::command(SendMailCommand::class)->everyMinute();
 //call closure

 //call invokable class

 //command