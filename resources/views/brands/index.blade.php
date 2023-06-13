@extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mt-3">
            <h3 class="text-center text-info ">Brand List</h3>
<table class="table table-hover table-info">
    <thead>
      <tr>
        <th scope="col">SN</th>
        <th scope="col">Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$brand->name}}</td>
        <td>
            <a class="btn btn-primary" href="/brand/{{$brand->id}}/edit">Edit</a>
        </td>
            <td>
             <form action="/brand/{{$brand->id}}" method="POST">
             @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form action="{{route('brandCreate')}}" method="GET">
    @csrf
    <button class="btn btn-warning">Create</button>
</form>
</div>
@endsection
