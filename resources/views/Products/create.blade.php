@extends('layouts.app')
@section('heading-content')
<h1>create product</h1>
@endsection

    @section('content')
    <form action="/product" class="form col-md-12 border p-2" method="post">
    @csrf
        <label for="name">name</label>
        <input type="text" id="name" name="name" placholder="Productname" class="form-control" >
            @error('name')
                <div class="text-danger">{{$message}}</div>
            @enderror

        <label for="description">description</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control"> </textarea>
        <label for="purchase_price">purchase_price</label>
        <input type="number" id="purchase_price" name="purchase_price" class="form-control" placeholder="150000">
            @error('purchase_price')
                <div class="text-danger">{{$message}}</div>
            @enderror

        <label for="sale_price">sale price</label>
        <input type="number" name="sale_price" id="sale_price" class="form-control" placeholder="150000">
            @error('sale_price')
                <div class="text-danger">{{$message}}</div>
            @enderror

        <label for="stock">stock</label>
        <input type="number" name="stock" class="text-warning" >

        <label for="category">category</label>
        <select  class="mt-2 text-info"id="category" name="categories_id">
        <option value="">-- pilih category --</option>
        @foreach($categories as $category)
        <option name="categories_id" value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
        </select><br>

        @error('categories_id')
            <div class="text-danger"><p>select category</p></div>
        @enderror
        <button type="submit" class="btn btn-primary text-white form-control mt-5 ">Upload</button>
    </form>
@endsection