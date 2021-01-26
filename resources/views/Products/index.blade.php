@extends('layouts.app')
@section('heading-content')
<h1>Products</h1>
@endsection
@section('content')
    <table class="table">
        <thead >
            <tr>
                <th>Name</th>
                <th>description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>productsNme</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Officia sit, illo facere id saepe, </td>
                 <td>
                    <a href="" class="btn btn-link text-info">Edit</a>
                    <a href="" class="btn btn-link text-danger">Delet</a>
                 </td>
            </tr>
        </tbody>
    </table>
@endsection