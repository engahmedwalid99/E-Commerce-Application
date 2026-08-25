<?php

namespace App\Http\Controllers;

use App\Http\Requests\Orders\checkoutRequest;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController
{

    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()
                ->route('cart')
                ->with('error', 'السلة فارغة.');
        }

        return view('Orders.checkout', compact('cart'));
    }

    public function store(checkoutRequest $request)
    {
        $cart = session()->get('cart', []);
    
        if (empty($cart)) {
            return redirect()
                ->route('cart')
                ->with('error', 'السلة فارغة.');
        }
    
        DB::transaction(function () use ($request, $cart) {
    
            $subtotal = 0;
    
            foreach ($cart as $item) {
                $subtotal += $item['price'] * $item['quantity'];
            }
    
            $shipping = 0;
            $total = $subtotal + $shipping;
    
            $order = Order::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'notes' => $request->notes,
                'subtotal' => $subtotal,
                'total' => $total,
                'status' => 'pending',
            ]);
    
            foreach ($cart as $id => $item) {
    
                $product = Product::where('id', $id)
                    ->lockForUpdate()
                    ->first();
    
                if (!$product) {
                    return redirect()->route('checkout')->with('error' , "المنتج غير موجود او تم حذفه.");
                }
    
                if ($product->stock < $item['quantity']) {
                    return redirect()->route('checkout')->with('error' , "الكميه المطلوبه من $product->name غير متوفره.");
                }
    
                $itemSubtotal = $item['price'] * $item['quantity'];
    
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'subtotal' => $itemSubtotal,
                    'total' => $itemSubtotal,
                ]);
    
                $product->decrement(
                    'stock',
                    $item['quantity']
                );
            }
        });
    
        session()->forget('cart');
    
        return redirect()
            ->route('orders.index')
            ->with('success', 'تم إنشاء الطلب بنجاح.');
    }


    public function index()
    {
        $orders = Order::where(
            'user_id',
            Auth::id()
        )
            ->latest()
            ->get();

        return view(
            'Orders.index',
            compact('orders')
        );
    }

    public function show($id)
    {
        $order = Order::with('items')
            ->where(
                'user_id',
                Auth::id()
            )
            ->findOrFail($id);

        return view(
            'Orders.show',
            compact('order')
        );
    }
}
