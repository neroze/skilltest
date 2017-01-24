@extends('layouts.default.index')
@section('content')
<div class="container" id="app">
	@include('blocks.dev')
	<div class="row">
		<div class="col-md-7">
			@include('icusers.blocks.create_form')
		</div>
		<div class="col-md-5">
			@include('icusers.blocks.recently_added')
		</div>
	</div>
	
	
	
</div>
@stop