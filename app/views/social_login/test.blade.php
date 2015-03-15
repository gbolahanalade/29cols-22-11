@extends('layouts.default')

@section('content')

<div class="row">
	<div class="col-md-6">
		<h1>Test the fb login</h1>

		<a href="/login/facebook" class="btn btn-small btn-default">Login with Facebook</a>
		<a href="/login/twitter" class="btn btn-small btn-default">Login with Twitter</a>
		<a href="/login/google" class="btn btn-small btn-default">Login with Google</a>

	</div>
</div>


@stop