@extends('layouts.admin')

@section('content')

<div class="col-lg-8">
	<hr>
	<h1>{{ $project->name }}</h1>
	<p class="lead">{{ ucwords($project->user->created_at) }}</p>
	<p class="lead">{{ ucwords($project->user->username) }}</p>
	<hr>
	<p><span class="glyphicon glyphicon-time"></span></p>
	<hr>
	<p class="lead">{{ $project->description }}</p>
	<img class="img-responsive" src="../{{ $project->image }}">
</div>

<div class="col-lg-4">
	<div class="well">
		<legend>What would you like to do next?</legend>
		{{ link_to_route('portfolios.edit', 'Update', array($project->id), array('class' => 'btn btn-primary')) }}
		{{ link_to_route('portfolios.index', 'Back to index', null, array('class' => 'btn btn-warning')) }}
		<br>
	</div>
</div>

@stop