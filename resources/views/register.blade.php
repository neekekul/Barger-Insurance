@extends('layouts.biMeta')


@section('content')

<div id="main" class="container-fluid">
    @include('layouts.biHead')
    <div class="container-fluid">
       @include('layouts.landing.biLogo')
        <div class="row justify-content-around align-items-center" style="background-color: white;">
            <div class="col-6">

                <form method="post" style="width:100%;">
                    @include('layouts.message')

                    {{ csrf_field() }}
                  <br>
                  <br>
                       <label for="email">Email:</label>
                        <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" placeholder="" autocomplete="Off" maxlength="60" required>
                        </div><br>
                        <label for="username">Username:</label>
                        <div class="input-group">
                            <input id="username" type="text" class="form-control" name="username" placeholder="" autocomplete="Off" maxlength="60" required>
                        </div><br>
                        <label for="password">Password:</label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" name="password" placeholder="" autocomplete="Off" maxlength="100" required>
                        </div><br>
                        <label for="password-confirmation">Re-enter password:</label>
                        <div class="input-group">
                            <input id="passwordCheck" type="password" class="form-control" name="password_confirmation" placeholder="" autocomplete="Off" maxlength="100" required>
                        </div><br>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" name="signed">Sign Up</button>
                        </div>



                        @include('layouts.errors')
                </form>
            </div>
            <div class="col-6" style="text-align: center; margin-top: 0vw;">
                            <h5 style="margin-bottom: vw;">Already have an account? Click the button below to sign in!</h5>
                            <br>
                            <form action="/login" method="GET">
                                <div class="form-group">
                                    <button class="btn btn-dark btn-lg btn-block">Login</button>
                                </div>
                                <br><br>
                            </form>
            </div>
        </div>
        @include('layouts.biFoot')
    </div>
</div>


@endsection
