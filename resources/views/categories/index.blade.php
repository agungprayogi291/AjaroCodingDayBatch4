@extends('layouts.app')

@section('heading')
Categories
@endsection

@section('content')
<a href="/categories/create" class="btn btn-success px-5 text-center mb-4">+add</a>
    <table class="table ">
        <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td class="row">
                        <a href="/categories/{{$category->id}}/edit" class="btn btn-link text-info col-2" >Edit</a>
                        <form action="/categories/{{$category->id}}" method="POST" class="col-10">
                        @csrf   
                        @method("DELETE")
                        <button class="btn btn-link text-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection
