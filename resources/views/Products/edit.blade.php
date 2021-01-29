@extends('layouts.app')
@section('header-content')
    <h1>Edit product</h1>
@endsection
@section('content')
    <form action="/products/{{$product->id}}" class="form col-md-12 border p-2" method="POST">
    @csrf
    @method("PUT")
    <label for="name">name</label>
    <input type="text" name="name" class="form-control" value="{{$product->name}}">
    <label for="description">description</label>
    <textarea name="description" id="description" cols="30" rows="5" class="form-control" > {{$product->description}}</textarea>
    <label for="purchase_price">purchase_price</label>
    <input type="number" id="purchase_price" name="purchaseprice" class="form-control" placeholder="150000" value="{{$product->purchase_price}}">
    <label for="sale_price">sale price</label>
    <input type="number" name="saleprice" id="purchase_price" class="form-control" placeholder="150000" value="{{$product->sale_price}}">
    <label for="stock">stock</label>
    <input type="number" name="stock" class="text-warning" value="{{$product->stock}}" >
    <label for="category">category</label>
    <select name="category" class="mt-2 text-info"id="category">
    <option value="{{$product->category_id}}">{{$product->category_id}}</option>
    <option value=1>elektronik</option>
    </select><br>
    <button type="submit" class="btn btn-primary text-white form-control mt-5 ">Upload</button>
    </form>
@endsection