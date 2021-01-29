<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('Products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->purchase_price =$request->purchaseprice;
        $product->sale_price = $request->saleprice;
        $product->stock = $request->stock;
        $product->category_id = $request->category;
        $product->save();
        return redirect('/products');
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
        $product->purchase_price =$request->purchaseprice;
        $product->sale_price = $request->saleprice;
        $product->stock = $request->stock;
        $product->category_id = $request->category;
        $product->save();
        return redirect('/products');

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
        return redirect('/products');
    }
}
