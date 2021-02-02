@extends('layouts.app')
@section('header-content')
<h1>register splier</h1>
@endsection
@section('content')
    <form action="/suppliers/{{$supplier->id}}" method="POST" class="form col-md-8 m-auto">
    @csrf 
    @method('PUT')
    <div class="mb-3">
        <label for="name">name</label>
        <input type="text" name="name" class="form-control" value="{{old('name',$supplier->name)}}">
        @error('name')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email">email</label>
        <input type="email" placeholder="exmpl123@gmail.con" name="email" class="form-control" value="{{old('email',$supplier->email)}}">
        @error('email')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="address">address</label>
        <textarea name="address" id="address" cols="30" rows="4"class="form-control">{{old('address',$supplier->address)}}</textarea>
        @error('address')
            <div class="text-danger">{{$message}}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-primary">submit</button>
    </div>
    
    </form>
@endsection