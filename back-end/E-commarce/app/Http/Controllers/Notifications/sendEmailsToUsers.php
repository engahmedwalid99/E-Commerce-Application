<?php

namespace App\Http\Controllers\Notifications;

use App\Http\Requests\Notifications\sendNotificationRequest;
use App\Mail\SendNotificationToUsers;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class sendEmailsToUsers
{
    public function __invoke(sendNotificationRequest $request)
    {
        $users = User::whereNotNull('email')->get();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new SendNotificationToUsers($request->name, $request->description));
        };

        return redirect()
            ->route('view_add_notification')
            ->with('success', 'تم أرسال البريد بنجاح.');
    }
}