@extends('layouts.biMeta')


@section('content')
	<div id="main" class="container-fluid">

		@include('layouts.blog.blogHead')
		<div class="container-fluid" style="background-color: #d2c9bc;">
			@include('layouts.blog.blogIntro')
			@include('layouts.blog.singleFeed')
			@include('layouts.blog.commentForm')
			@include('layouts.blog.commentFeed')
			@include('layouts.landing.biLogo')
		</div>

	</div>

@endsection
