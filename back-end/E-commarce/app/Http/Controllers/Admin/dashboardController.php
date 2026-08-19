<?php

namespace App\Http\Controllers\Admin;

use App\Mail\UpdateAdminToUser;
use App\Mail\UpdateUserToAdmin;
use App\Models\notification;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class dashboardController
{
    public function index(){
        return view('Admin.dashboard');
    }

    public function content(){
        $usersCount = User::count();

        $ordersCount = Order::count();

        $productsCount = Product::count();

        $lowStockCount = Product::where('stock', '<=', 5)->count();

        $allSales = Order::where('status', 'completed')->count();


        $monthSales = Order::whereBetween('created_at', [
            Carbon::now()->startOfMonth(),
            Carbon::now()->endOfMonth(),
        ])->count();


        $users = User::latest()->paginate(3);

        return view('Extends.content', compact(
            'usersCount',
            'ordersCount',
            'productsCount',
            'lowStockCount',
            'allSales',
            'monthSales',
            'users'
        ));
    
    }

    public function users(){
        $users = User::paginate(10);
        return view('Extends.users', compact('users'));
    }

    public function delete_user($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('view.users')->with('success','تم حذف ألمستخدم بنجاح');
    }

    public function active_user($id){
        $user = User::findOrFail($id);
        $user->update([
            'status'=> 1,
        ]);
        return redirect()->route('view.users')->with('success','تم تفعيل ألمستخدم بنجاح');
    }

    public function block_user($id){
        $user = User::findOrFail($id);
        $user->update([
            'status'=> 0,
        ]);
        return redirect()->route('view.users')->with('success','تم حظر ألمستخدم بنجاح');
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->email === env('OWNER')) {
            return back()->with('error', 'لا يمكن تغيير صلاحية مالك النظام.');
        }
    
        $request->validate([
            'role' => ['required', 'in:user,admin'],
        ]);
    
        $user->update([
            'role' => $request->role,
        ]);

        // if($request->role == 'admin'){
        //    Mail::to($user->email)->send(new UpdateUserToAdmin($user->name));
        // }
        //if($request->role == 'user'){
        //    Mail::to($user->email)->send(new UpdateAdminToUser($user->name));
        //}
    
        return back()->with('success', 'تم تحديث صلاحية المستخدم بنجاح.');
    }

    public function view_notification(){
        return view('Extends.addNotifications');
    }

    public function view_users_notification(){
        return view('Extends.addUsersNotifications');
    }

    public function admin_notification(){
        $notifications = notification::paginate(10);
        return view('Extends.adminNotification', compact('notifications'));
    }
}
