<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function create(){
        $products = Product::all();

        return view('auth.products', compact('products'));
    }

    public function nuevo(){
        return view('auth.nuevo');
    }

    public function store(Request $request){
        $product = new Product();

        $product->title = $request->title;
        $product->country = $request->country;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('auth.edit',compact('product'));
    }

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
