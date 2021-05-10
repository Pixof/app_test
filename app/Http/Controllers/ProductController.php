<?php

namespace App\Http\Controllers;

use App\Models\Product;


class ProductController extends Controller
{
    function index(){
        $products = Product::get()->all();
        return view('product', ['products'=>$products]);
    }

    function create(){
        return view('create');
    }


    public function store()
    {
        $post = request()->validate([
            'category_id'=>'required',
            'reference'=>'required',
            'libelle'=>'required',
            'description'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);
        Product::create($post);
        return redirect()->route('products');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit', compact('product'));
    }

    public function update($id)
    {
        $mod = request()->validate([
            'category_id'=>'required',
            'reference'=>'required',
            'libelle'=>'required',
            'description'=>'required',
            'price'=>'required',
            'stock'=>'required',
        ]);
        $product = Product::findOrFail($id);
        $product->update($mod);
        return redirect()->route('products');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products');
    }
}
