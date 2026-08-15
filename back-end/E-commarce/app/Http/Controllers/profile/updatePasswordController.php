<?php

namespace App\Http\Controllers\profile;

use App\Http\Requests\profile\updatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class updatePasswordController
{
    public function update(updatePasswordRequest $request){
        $data = $request->validated();
        if(Hash::check($data['old_password'], auth()->user()->password)){
            auth()->user()->password = Hash::make($data['new_password']);
            auth()->user()->save();
            return redirect()->route('user.profile')->with('success','تم تحديث كلمة المرور بنجاح');
        } else {
            return redirect()->route('user.profile')->with('error','كلمة المرور الحالية غير صحيحة');
        }
    }
}