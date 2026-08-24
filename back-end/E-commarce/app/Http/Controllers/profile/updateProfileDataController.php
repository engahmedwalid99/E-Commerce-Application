<?php

namespace App\Http\Controllers\profile;

use App\Http\Requests\profile\updateProfileDataRequest;

class updateProfileDataController
{
    public function update(updateProfileDataRequest $request){
        $user = auth()->user();
        try {
            $data = $request->validated();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->city = $data['city'];
            $user->save();
            return redirect()->back()->with('success', 'تم تحديث البيانات الشخصية بنجاح');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء تحديث البيانات الشخصية');
        }
    }
}
