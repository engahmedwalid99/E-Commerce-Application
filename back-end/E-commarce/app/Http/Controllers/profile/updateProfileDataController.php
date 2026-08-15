<?php

namespace App\Http\Controllers\profile;

use App\Http\Requests\profile\updateProfileDataRequest;

class updateProfileDataController
{
    public function update(updateProfileDataRequest $request){
        try {
            $data = $request->validated();
            auth()->user()->name = $data['name'];
            auth()->user()->email = $data['email'];
            auth()->user()->phone = $data['phone'];
            auth()->user()->city = $data['city'];
            auth()->user()->save();
            return redirect()->back()->with('success', 'تم تحديث البيانات الشخصية بنجاح');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء تحديث البيانات الشخصية');
        }
    }
}
