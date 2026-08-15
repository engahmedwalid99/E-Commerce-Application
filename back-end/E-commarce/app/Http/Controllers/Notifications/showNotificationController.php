<?php

namespace App\Http\Controllers\Notifications;

use App\Models\notification;
use Illuminate\Http\Request;

class showNotificationController
{
    public function __invoke(Request $request)
    {
        $notifications = notification::paginate(10);
        return view("Notification.showNotification", compact("notifications"));
    }
}