<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Requests\Notifications\sendNotificationRequest;
use App\Models\notification;
use Illuminate\Http\Request;

class updateNotofication
{
    /**
     * Handle the incoming request.
     */
    public function show($id)
    {
        $notification = notification::findOrFail($id);
        return view('Extends.updateNotification', compact('notification'));
    }

    public function save(sendNotificationRequest $request, $id){
        $notification = notification::findOrFail($id);
        $data = $request->validated();
        $notification->update($data);
        return redirect()->route('adminNotification')->with('success','تم تعديل ألاشعار بنجاح.');
    }
}