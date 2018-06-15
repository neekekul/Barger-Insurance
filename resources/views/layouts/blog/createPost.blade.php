@extends('layouts.biMeta')


@section('content')
	<div id="main" class="container-fluid">
		@include('layouts.blog.blogHead')
		<div class="container-fluid">
			@include('layouts.blog.postForm')
		</div>
	</div>
@endsection