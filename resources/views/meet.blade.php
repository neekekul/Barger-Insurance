@extends('layouts.biMeta')


@section('content')
<div id="main" class="container-fluid">
	@include('layouts.biHead')
	<div class="container-fluid">
		@include('layouts.feature.meetStephen')
		@include('layouts.feature.meetSusan' )
	</div>
</div>

	
@endsection