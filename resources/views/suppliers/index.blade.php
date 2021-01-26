@extends('layouts.app')
@section('header-content')
    <h1>suppliers</h1>
@endsection
@section("content")
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>agungprayogi</td>
                <td>Agungprayogi291@gmail.com</td>
                <td>sentul rt 03/01 , sewurejo ,Mojogedang,Karanganyar</td>
                <td>
                    <a href="" class="btn btn-link text-info">Edit</a>
                    <a href="" class="btn btn-link text-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection