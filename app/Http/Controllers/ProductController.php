<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index()
    {
        $products=Product::all();
        return view('Product.index')->with('products',$products);
    }


    public function create()
    {
        return view('Product.create');
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3|max:20',
            'quantity'=>'required| numeric|min:1',
            'unit'=>'required',
            'price'=>'required|numeric',
        ]);
        Product::create($request->all());
        $products=Product::all();
        return view('Product.index')->with('products',$products);
    }


    public function show($id)
    {
        //
    }


    public function edit(Product $product)
    {

         return view('Product.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {

        $product->update($request->all() );
        $products=Product::all();
        return view('Product.index',compact('products'));
    }


    public function destroy(Product $product)
    {
         $product->delete();
         $products=Product::all();
         return view('Product.index',compact('products'));
    }
}
