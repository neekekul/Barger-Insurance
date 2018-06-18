@extends('layouts.biMeta')


@section('content')
<div id="main" class="container-fluid">
    @include('layouts.biHead')
    @if($flash = session('message'))
      <div id="flash-message" class="alert alert-success" role="alert">
          {{ $flash }}
      </div>
    @endif
    <div class="container-fluid">
        @include('layouts.landing.biLogo')
        <div class="row justify-content-around align-items-end" style="background-color: white;">
            <div class="col-6">
                @include('layouts.message')
                <form method="post" style="width:100%;">

                    {{ csrf_field() }}
                  
                  <label for="email">Email:</label><br>
                   <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" placeholder="" autocomplete="Off" maxlength="60" required>

                        </div>
                        <br>
                        <label for="password">Password:</label>
                        <br>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" name="password" placeholder="" autocomplete="Off" maxlength="100" required>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-lg btn-block">Login</button>
                        </div>
                        @include('layouts.errors')
                </form>
            </div>
            <div class="col-4" style="text-align: center; margin-top: 0vw;">
                            <h5 style="margin-bottom: vw;">Don't have an account? Click the button below to register!</h5>
                            <br>
                            <form action="/register" method="GET">
                                <div class="form-group">
                                    <button class="btn btn-dark btn-lg btn-block">Register</button>
                                </div>
                                <br><br>
                            </form>
            </div>
        </div>
        @include('layouts.biFoot')
    </div>
</div>

@endsection
