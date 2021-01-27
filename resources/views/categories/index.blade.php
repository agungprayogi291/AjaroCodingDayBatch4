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
                    <td>
                        <a href="/categories/{{$category->id}}/edit" class="btn btn-link text-info">Edit</a>
                        <a href="" class="btn btn-link text-danger">Delete</a>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection
