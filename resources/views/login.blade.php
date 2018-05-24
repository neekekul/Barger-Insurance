@extends('layouts.biMeta')


@section('content')
<div id="main" class="container-fluid">
    @include('layouts.biHead')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-6" style="text-align: center;">
                @include('layouts.message')
                <form method="post" style="width:100%;">

                    {{ csrf_field() }}
                  <br>
                  <br>
                   <div class="input-group">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email..." autocomplete="Off" maxlength="60" required>

                        </div>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password..." autocomplete="Off" maxlength="100" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>
                        @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
