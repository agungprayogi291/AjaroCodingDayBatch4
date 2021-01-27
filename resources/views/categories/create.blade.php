@extends('layouts.app')
@section('header-content')
<h1>create barang</h1>
@endsection
@section('content')
    <form action="/categories" class="form col-md-4 m-auto" method="post">
    @csrf 
    <label for="name">name</label>
    <input type="text" name="name" id="name" class="form-control">
    <button class="btn btn-primary mt-4">Save</button>
    </form>
@endsection