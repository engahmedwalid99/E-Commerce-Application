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

        return view('orders.checkout', compact('cart'));
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

            $total = 0;


            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }


            $order = Order::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
                'city' => $request->city,
                'notes' => $request->notes,
                'total' => $total,
                'status' => 'pending',
            ]);



            foreach ($cart as $id => $item) {


                $product = Product::where('id', $id)
                    ->lockForUpdate()
                    ->first();

                if (!$product) {
                    throw new \Exception(
                        'المنتج غير موجود.'
                    );
                }


                if ($product->stock < $item['quantity']) {

                    throw new \Exception(
                        "الكمية المطلوبة من {$product->name} غير متوفرة."
                    );
                }

 

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_name' => $product->name,
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'total' => $item['price'] * $item['quantity'],
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
            ->with(
                'success',
                'تم إنشاء الطلب بنجاح.'
            );
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