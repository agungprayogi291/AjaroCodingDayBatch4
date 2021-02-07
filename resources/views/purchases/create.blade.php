@extends('layouts.app')

@section('heading-content')
    <h1>Create Purchases</h1>
@endsection
@section('content')
   
    <form action="/purchases" method="POST" class="form">
    @csrf 
    <div class="mb-3">
    <label for="supplier">Supplier</label>
        <select name="supplier_id" class="form-control">
            <Option>-- pilih suplier --</Option>
            @foreach($suppliers as $supplier)
            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
            @endforeach
        </select>
        @error('supplier_id')
            <div class="btn text-danger">{{$message}}</div>
        @enderror
    </div>

    @if(session('error_message'))
    <div class="alert alert-danger">{{session('error_message')}}</div>
    @endif
    <table class="table">
        <thead>
            <th></th>
            <th>Name</th>
            <th>Purchase price</th>
            <th>Quantity</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>
                   <input type="checkbox" name="items[{{$loop->index}}][product_id]" value="{{$product->id}}">
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->purchase_price}}</td>
                <td> 
                    <input name="items[{{$loop->index}}][quantity]" class="form-control" />
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mb-3">
        <button class="btn btn-primary">Submit</button>
    </div>
    </form>


       
@endsection

