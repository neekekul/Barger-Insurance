@extends('layouts.biMeta')


@section('content')

<div id="main" class="container-fluid">
    @include('layouts.biHead')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-6" style="text-align: center;">

                <form method="post" style="width:100%;">
                    @include('layouts.message')

                    {{ csrf_field() }}
                  <br>
                  <br>
                        <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email..." autocomplete="Off" maxlength="60" required>
                        </div>
                        <div class="input-group">
                            <input id="username" type="text" class="form-control" name="username" placeholder="Username..." autocomplete="Off" maxlength="60" required>
                        </div>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password..." autocomplete="Off" maxlength="100" required>
                        </div>
                        <div class="input-group">
                            <input id="passwordCheck" type="password" class="form-control" name="password_confirmation" placeholder="Re-enter password..." autocomplete="Off" maxlength="100" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" name="signed">Sign Up</button>
                        </div>



                        @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
