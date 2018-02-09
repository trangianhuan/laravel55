<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
    echo 'vaaa';
    $file = "myText.txt";
    $content = "\n" . date('H:i:s');
    file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
})->describe('Display an inspiring quote');
