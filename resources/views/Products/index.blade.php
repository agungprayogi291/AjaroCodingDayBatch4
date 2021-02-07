@extends('layouts.app')
@section('heading-content')
<h1>Products</h1>
@endsection
@section('content')
<a href="/product/create" class="btn btn-success px-4 ">+Add</a>
    <table class="table">
        <thead >
            <tr>
                <th>Name</th>
                <th>description</th>
                <th>purchase price</th>
                <th>sale price</th>
                <th>stock</th>   
                <td>category</td>
                <th></th>
            </tr>
        </thead>
        <tbody>
       
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                 <td>{{$product->purchase_price}}</td>
                 <td>{{$product->sale_price}}</td>
                 <td>{{$product->stock}}</td>
                 <td>{{$product->category->name}}</td>
                 <td>
                    <a href="/products/{{$product->id}}/edit" class="btn btn-link text-info">Edit</a>
                    <form action="/products/{{$product->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                         <button class="btn text-danger">Delete</button>
                    </form>
                  
                 </td>
                 
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection