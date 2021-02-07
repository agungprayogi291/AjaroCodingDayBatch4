@extends('layouts.app')
@section('heading-content')
<h1>Purchase Detail</h1>
@endsection
@section('content')
    <div class="mb-3" class="form">
        <label >Supplier</label>
        <input type="text" value="{{$purchase->supplier->name}}" class="form-control">
    </div>

    <div class="mb-3" class="form">
        <label>Total</label>
        <input type="text" value="{{$purchase->total}}" class="form-control">
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Purchase Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->purchase_price}}</td>
            <td>{{$purchaseItem->quantity}}</td>
            <td>{{$purchaseItem->subtotal}}</td>
        </tr>
        </tbody>
    </table>
@endsection