<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class HashUserPassword
{
    public function handle($event)
    {
        Log::info('Событие Registered сработало');
        if ($event->user->password) {
            $event->user->password = Hash::make($event->user->password);
            $event->user->save();
        }
    }

}
