@extends('layouts.app')
@section('header-content')
<h1>register splier</h1>
@endsection
@section('content')
    <form action="/suppliers" method="POST" class="form col-md-8 m-auto">
    @csrf 
    <div class="mb-3">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control">
        @error('name')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email">email</label>
        <input type="email" placeholder="exmpl123@gmail.con" name="email" class="form-control">
        @error('email')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="address">address</label>
        <textarea name="address" id="address" cols="30" rows="4"class="form-control"></textarea>
        @error('address')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary">submit</button>
    </div>
    
   
    </form>
@endsection