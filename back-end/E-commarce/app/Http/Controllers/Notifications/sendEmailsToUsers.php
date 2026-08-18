<?php

namespace App\Http\Controllers\Notifications;

use Resend;
use App\Models\User;
use App\Http\Requests\Notifications\sendNotificationRequest;

class sendEmailsToUsers
{

    public function __invoke(sendNotificationRequest $request)
    {
        $users = User::whereNotNull('email')->get();

        try {

            $resend = Resend::client(env('RESEND_API_KEY'));

            foreach ($users as $user) {

                $resend->emails->send([
                    'from' => 'onboarding@resend.dev',
                    'to' => $user->email,
                    'subject' => $request->name,
                    'html' => $request->description,
                ]);
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