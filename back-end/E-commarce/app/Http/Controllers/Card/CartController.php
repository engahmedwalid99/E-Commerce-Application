<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController 
{
    public function index()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function add(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {

            if ($cart[$product->id]['quantity'] >= $product->stock) {
                return back()->with('error', 'الكمية المطلوبة غير متوفرة في المخزون.');
            }

            $cart[$product->id]['quantity']++;
        } else {

            if ($product->stock <= 0) {
                return back()->with('error', 'هذا المنتج غير متوفر حاليًا.');
            }

            $cart[$product->id] = [
                'id'       => $product->id,
                'name'     => $product->name,
                'price'    => $product->sale_price ?? $product->price,
                'image'    => $product->image,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'تم إضافة المنتج إلى السلة.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($id);

        if ($request->quantity > $product->stock) {
            return back()->with(
                'error',
                "المتاح من المنتج هو {$product->stock} فقط."
            );
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
        }

        session()->put('cart', $cart);

        return back()->with('success', 'تم تحديث السلة.');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);

        return back()->with('success', 'تم حذف المنتج من السلة.');
    }

    public function clear()
    {
        session()->forget('cart');

        return back()->with('success', 'تم تفريغ السلة.');
    }
}