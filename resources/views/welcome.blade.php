@extends('layouts.biMeta')


@section('content')

<div id="main" class="container">

    <nav class="navbar sticky-top navbar-dark bg-dark">
              <a class="navbar-brand" href="#">Barger Insurance</a>
              @if(auth()->user())
                  <a class="navbar-brand" href="#" style="margin-left:-95px;">{{auth()->user()->name}}</a>
              @endif
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
               <br>
                <ul id="drop" class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Meet Our Staff</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Insurance Solutions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Keystone Membership Info</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/login">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="/register">Register</a>
                  </li>
                </ul>
              </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{URL::asset('/images/IMG_courthouse.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img src="{{URL::asset('/images/IMG_2587.JPG')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img src="{{URL::asset('/images/IMG_2611.JPG')}}" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</div>


@endsection
