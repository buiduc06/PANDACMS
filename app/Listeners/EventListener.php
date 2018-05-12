<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\LoginLog;
class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Event  $event
     * @return void
     */
    public function handle(Event $event)
    {
    //     $user = new LoginLog();
    //    $events->listen('admin.auth.login', function ($user, $remember) {
    //     $user->create(['user_id' => \Auth::id(), 'ip_login' => \Request::ip()]);
    // });
    }
}
