@extends('layouts.biMeta')


@section('content')

<div id="main" class="container-fluid">

    <nav class="navbar sticky-top navbar-dark" style="background-color: #0082c4;">
              <a class="navbar-brand" href="/">Barger Insurance</a>
              @if(auth()->user())
                  <a class="navbar-brand" href="#" style="margin-left:-90px;">{{auth()->user()->name}}</a>
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
    <div class="container-fluid">
      <div id="bargerLogo" class="row justify-content-center align-items-center">
          <div class="col-4">
              <a href="/"><img src="{{URL::asset('/images/barger_insurance_agency_logo.png')}}" alt="BargerIns Logo" height="66px" width="366px"></a>
          </div>
      </div>
       <div id="intro" class="row">
           <div id="gallery" class="col-sm">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
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
                        <div class="carousel-item">
                          <img src="{{URL::asset('/images/IMG_nanwood.jpg')}}" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                          <img src="{{URL::asset('/images/IMG_4248.JPG')}}" alt="Fifth slide">
                        </div>
                        <div class="carousel-item">
                          <img src="{{URL::asset('/images/IMG_church.jpg')}}" alt="Sixth slide">
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
           <div id="quote" class="col-sm">
                <h1 id="savings">Start your savings today</h1>
                <p>Get your quote online</p>
                <form action="#" method="GET">
                    <button id="bestbutton" type="submit">GET A QUOTE</button>
                </form>
                <p id="call">or call us at:</p>
                <a href="tel:+12703842457">270-384-2457</a>
           </div>
        </div>
        <div id="address" class="row justify-content-around align-items-center">
            <div id="adair" class="col-4">
                <address id="one"><span>Barger Insurance Agency<br/>
                          326 Public Square<br/>
                          Suite 100<br/>
                          Columbia, KY 42728<br/>
                          <a href="tel:+12793842457">270-384-2457</a></span></address>
            </div>
            <div id="green" class="col-4">
                <address id="two"><span>Barger Insurance Agency<br/>
                          DBA Jack & Jack Insurance Agency<br/>
                          2395 N. Main St.<br/>
                          Jamestown, KY 42629<br/>
                          <a href="tel:+12703435363">270-343-5363</a></span></address>
            </div>
        </div>
        <div id="logos" class="row justify-content-center align-items-center">
            <div id="keystoneLogo" class="col-4">
               <p>proud member of</p>
                <img src="{{URL::asset('/images/logoKeystoneWhite.png')}}" alt="Keystone Logo" width="350px" height="46px">
            </div>
        </div>
    </div>
</div>


@endsection
