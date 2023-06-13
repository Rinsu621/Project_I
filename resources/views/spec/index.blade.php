@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mt-3">
            <h3 class="text-center text-info ">Specification List</h3>
<table class="table table-hover table-info">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Brand</th>
        <th scope="col">Price</th>
        <th scope="col">Launch</th>
         <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($specs as $spec)
      <tr>
        <td>{{$loop->iteration}}</td>
        {{-- <td><img src="{{'/'.$spec->image}}" width="50"></td> --}}
        <td><img src="{{asset($spec->image)}}" width="50"></td>
        <td>{{$spec->name}}</td>
        <td>{{$spec->brand->name}}</td>
        <td>{{$spec->price}}</td>
        <td>{{$spec->launch}}</td>
        <td>
            <a class="btn btn-primary" href="/spec/{{$spec->id}}/edit">Edit</a>
        </td>
            <td>
             {{-- <form action="/spec/{{$spec->id}}" method="POST"> --}}
                <form action="/spec/{{$spec->id}}" method="POST">
             @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection
