<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=> $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'price'=> 'required',
            'inventory_quantity'=> 'required',
            'status'=> 'required',
        ]);

        

        $newProduct = Product::create($data);

        Session::flash('success', 'Product created successfully!');

        return redirect(route('products.index'))->with("success", "Product created successfully!");
    }

    public function edit(Product $product){
        return view('products.edit', ['Product'=>$product]);

    }

    public function update(Product $product, Request $request){

        $data = $request->validate([
            'name'=> 'required',
            'price'=> 'required',
            'inventory_quantity'=> 'required',
            'status'=> 'required',
        ]);

        $product -> update($data);

        return redirect(route('products.index'))->with("success", "Product updated successfully!");

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('products.index'))->with("success", "Product Deleted successfully!");
    }
}
