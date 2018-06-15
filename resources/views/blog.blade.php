@extends('layouts.biMeta')


@section('content')
	<div id="main" class="container-fluid">

		@include('layouts.blog.blogHead')
		<div class="container-fluid" style="background-color: #d2c9bc;">
			<div class="blog-header" id="blogheader">
			    <h1 class="blog-title">The Barger Blog</h1>
			    <p class="lead blog-description">This is the official blog of the Barger Insurance agency.</p>
			</div>
			@include('layouts.blog.mainFeed')
			@include('layouts.landing.biLogo')
		</div>

	</div>

@endsection