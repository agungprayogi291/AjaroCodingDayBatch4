<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
      
        $data = [
            'products'=> $products
          
        ];
        return view('Products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        $data = [
            'categories' => $categories
        ];
        return view('Products.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'purchase_price' => 'required|numeric|between:1,9999999999',
            'sale_price' => 'required|numeric|between:1,9999999',
            'category_id' => 'required|exists:categories,id'
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->purchase_price =$request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->stock = $request->stock;
        $product->category_id = $request->categories_id;
        $product->save();
        return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($products)
    {
        $product = Products::find($products);
        return view('Products.edit',['product'=>$product]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$products)
    {
        $product = Products::find($products);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->purchase_price =$request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->stock = $request->stock;
        $product->categories_id = $request->categories_id;
        $product->save();
        return redirect('/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($products)
    {
        $product = Products::find($products);
        $product->delete();
        return redirect('/product');
    }
}
