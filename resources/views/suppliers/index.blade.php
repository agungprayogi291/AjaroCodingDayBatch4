@extends('layouts.app')
@section('header-content')
    <h1>suppliers</h1>
@endsection
@section("content")
    @if(session('success_message'))
        <div class="alert alert-success col-md-2" >{{session('success_message')}}</div>
    @endif

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
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{$supplier->name}}</td>
                    <td>{{$supplier->email}}</td>
                    <td>{{$supplier->address}}</td>
                    <td>
                        <a href="/suppliers/{{$supplier->id}}/edit" class="btn btn-link text-info ">Edit</a>
                        <form action="/suppliers/{{$supplier->id}}" method="POST">
                        @csrf 
                        @method('DELETE')
                            <button class="btn btn-links text-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @push('script')
        <script>
        
         setTimeout(() => {
            let alert = document.querySelector('.alert')
            console.log(alert)
             alert.remove();
         }, 3000);
        </script>
    @endpush

@endsection

