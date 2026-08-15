<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ordersController{
    public function index()
    {
        $orders = Order::with('user')
            ->latest()
            ->paginate(15);

        return view('Extends.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with(['user', 'items'])
            ->findOrFail($id);

        return view('Extends.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => [
                'required',
                'in:pending,processing,shipped,completed,cancelled'
            ],
        ]);

        $order = Order::findOrFail($id);

        $order->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'تم تحديث حالة الطلب بنجاح.');
    }
}