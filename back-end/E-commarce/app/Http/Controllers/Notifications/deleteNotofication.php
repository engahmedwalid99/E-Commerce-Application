<?php

namespace App\Http\Controllers\Notifications;

use App\Models\notification;
use Illuminate\Http\Request;

class deleteNotofication
{
    public function __invoke($id)
    {
        $notification = notification::findOrFail($id);
        $notification->delete();
        return redirect()->route('adminNotification')->with('success','تم حذف ألاشعار بنجاح');
    }
}
