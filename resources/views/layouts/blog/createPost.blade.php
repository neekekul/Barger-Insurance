@extends('layouts.biMeta')


@section('content')
	<div id="main" class="container-fluid">
		@if($flash = session('message'))
		    <div id="flash-message" class="alert alert-success" role="alert">
		        {{ $flash }}
		    </div>
		@endif
		@include('layouts.blog.blogHead')
		<div class="container-fluid">
			@include('layouts.blog.postForm')
		</div>
	</div>
@endsection