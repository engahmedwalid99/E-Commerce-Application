<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;

class ProductController 
{
    public function addProduct()
    {
        return view('Extends.addProduct');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }

        Product::create([
            'name' => trim($data['name']),

            'description' => isset($data['description'])
                ? trim($data['description'])
                : null,

            'brand' => isset($data['brand'])
                ? trim($data['brand'])
                : null,

            'price' => $data['price'],

            'sale_price' => $data['sale_price'] ?? null,

            'stock' => $data['stock'],

            'sku' => trim($data['sku']),

            'category_id' => $data['category_id'],

            'status' => $data['status'],

            'is_featured' => $data['is_featured'],

            'image' => $data['image'] ?? null,
        ]);

        return redirect()
            ->route('add_product')
            ->with('success', 'تم إضافة المنتج بنجاح');
    }

    public function show_products(){
        $products = Product::paginate(10);
        return view('Extends.showProducts', ['products' => $products]);
    }

    public function show_update_product($id){
        $product = Product::find($id);
        return view('Extends.updateProduct', ['product' => $product]); 
    }

    public function update_product(ProductRequest $request, $id)
    {
        $data = $request->validated();

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {

            $data['image'] = $request
                ->file('image')
                ->store('products', 'public');
        }

        $product->update([
            'name' => trim($data['name']),

            'description' => isset($data['description'])
                ? trim($data['description'])
                : null,

            'brand' => isset($data['brand'])
                ? trim($data['brand'])
                : null,

            'price' => $data['price'],

            'sale_price' => $data['sale_price'] ?? null,

            'stock' => $data['stock'],

            'sku' => trim($data['sku']),

            'status' => $data['status'],

            'is_featured' => $data['is_featured'],

            'image' => $data['image'] ?? $product->image,
        ]);

        return redirect()
            ->route('show_products')
            ->with('success', 'تم تعديل المنتج بنجاح');
    }

    public function delet_product($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()
            ->route('show_products')
            ->with('success', 'تم حذف المنتج بنجاح');
    }

    public function product_details($id){
        $product = Product::findOrFail($id);
        return view('Products.productDetails', ['product'=> $product]);
    }

    public function all_products(){
        $all_products = Product::paginate(10);
        return view('Products.allProducts', ['products'=> $all_products]);
    }
}