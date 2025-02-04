<?php
namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;
use App\Jobs\SyncNews;

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
        $schedule->call(function () {
            Log::info('Callback executed');
        })->everyMinute();
        $schedule->command('app-dump-database')->everyMinute();
        $schedule->job(SyncNews::class)->everyMinute();
        $schedule->exec('touch storage/logs/test.log')->everyMinute();

    }

/*
    // {
    // // Выполнять команду каждый час
    // $schedule->command('inspire')->hourly();

    // // Выполнять команду каждый день в 1:00
    // $schedule->command('some:command')->dailyAt('01:00');

    // // Выполнять команду каждую минуту
    // $schedule->command('another:command')->everyMinute();

    // // Выполнять команду каждый понедельник в 5:00
    // $schedule->command('weekly:command')->mondays()->at('05:00');

    // // Выполнять команду каждый месяц в 23:00
    // $schedule->command('monthly:command')->monthlyOn(1, '23:00');
    // }

*/

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
