@extends('layouts.biMeta')


@section('content')
<div id="main" class="container-fluid">
    @include('layouts.biHead')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="background-color: white;">
            <div class="col-6">
                @include('layouts.message')
                <form method="post" style="width:100%;">

                    {{ csrf_field() }}
                  <br>
                  <br>
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
        </div>
    </div>
</div>

@endsection
