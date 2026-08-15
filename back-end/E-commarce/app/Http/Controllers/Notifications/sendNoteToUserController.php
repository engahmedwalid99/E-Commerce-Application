<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Requests\Notifications\sendNotificationRequest;
use App\Models\notification;

class sendNoteToUserController
{
    public function __invoke(sendNotificationRequest $request)
    {
        $notification_data = $request->validated();

        notification::create([
            'name' => $notification_data['name'],
            'description' => $notification_data['description'],
        ]);

        return redirect()
            ->route('view_add_notification')
            ->with('success', 'تم إضافة الإشعار بنجاح.');
    }
}