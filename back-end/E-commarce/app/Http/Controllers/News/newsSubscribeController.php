<?php

namespace App\Http\Controllers\News;

use App\Http\Requests\News\newsSubscribeRequest;
use App\Models\news;

class newsSubscribeController
{
    public function subscribe(newsSubscribeRequest $request){
        $user = $request->validated();
        news::create([
            'email' => $user['email'],
        ]);
        return redirect()->route('user.profile')->with('success','تم ألانضام بنجاح');
    }
}