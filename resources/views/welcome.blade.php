@extends('layouts.biMeta')


@section('content')
<div id="main" class="container-fluid">
  @if($flash = session('message'))
      <div id="flash-message" class="alert alert-success" role="alert">
          {{ $flash }}
      </div>
  @endif
   @include('layouts.biHead')
    <div class="container-fluid">
      @include('layouts.landing.biLogo')
       <div id="intro" class="row">
           @include('layouts.landing.biGallery')
           @include('layouts.landing.biQuote')
        </div>
        @include('layouts.landing.biKeystone')
        @include('layouts.landing.biAddress')
        @include('layouts.biFoot')
    </div>
</div>

@endsection
