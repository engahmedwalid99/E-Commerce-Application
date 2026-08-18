<?php

namespace App\Http\Controllers\Notifications;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Notifications\sendNotificationRequest;
use App\Mail\SendNotificationToUsers;

class sendEmailsToUsers
{
    public function __invoke(sendNotificationRequest $request)
    {
        $users = User::whereNotNull('email')->get();

        try {

            foreach ($users as $user) {

                Mail::to($user->email)->send(
                    new SendNotificationToUsers(
                        $request->name,
                        $request->description
                    )
                );
            }

            return redirect()
                ->route('view_add_notification')
                ->with('success', 'تم إرسال البريد بنجاح.');

        } catch (\Throwable $th) {

            return redirect()
                ->route('view_add_notification')
                ->with('error', 'فشل إرسال البريد.');
        }
    }
}