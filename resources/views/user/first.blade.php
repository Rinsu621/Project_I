@extends('layouts.app')
@section('content')

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="phone-01.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="animated bounceInRight text-dark" style="animation-delay:10s">Navigate the Mobile Jungle with Ease</h1>
          <form action="/register" method="POST">
            @csrf
            <button type="button" class="btn btn-outline-warning" style="animation-delay:10s">Register</button>
        </form>
        </div>
      </div>
@endsection
