@extends('layouts.app')
@section('heading-content')
<h1>create product</h1>
@endsection

@section('content')
<form action="/products" class="form col-md-12 border p-2" method="post">
@csrf
<label for="name">name</label>
<input type="text" id="name" name="name" placholder="Productname" class="form-control" >
<label for="description">description</label>
<textarea name="description" id="description" cols="30" rows="5" class="form-control"> </textarea>
<label for="purchase_price">purchase_price</label>
<input type="number" id="purchase_price" name="purchaseprice" class="form-control" placeholder="150000">
<label for="sale_price">sale price</label>
<input type="number" name="saleprice" id="purchase_price" class="form-control" placeholder="150000">
<label for="stock">stock</label>
<input type="number" name="stock" class="text-warning" >
<label for="category">category</label>
<select name="category" class="mt-2 text-info"id="category">
<option value=1>elektronik</option>
</select><br>
<button type="submit" class="btn btn-primary text-white form-control mt-5 ">Upload</button>
</form>
@endsection