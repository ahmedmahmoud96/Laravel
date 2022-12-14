<?php

namespace App\Console;

use App\Console\Commands\expir;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('user.expire')->everyMinute();
        $schedule->command('user.email')->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        expir::class;
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
