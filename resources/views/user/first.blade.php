@extends('layouts.app')
@section('content')
 <div >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="phone-01.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="animated bounceInRight text-info" style="animation-delay:10s">Navigate the Mobile Jungle with Ease</h1>
          <a class="btn btn-outline-warning" type="submit" href="{{route('register.create')}}">Register</a>
        </div>
      </div>
    </div>
@endsection
