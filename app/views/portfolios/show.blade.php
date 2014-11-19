@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
<div class="col-lg-8">
	<hr>
	<h1>{{ $project->name }}</h1>
	<!-- <p class="lead"></p> -->
	<h2 class="projectName">{{ ucwords($project->user->username) }}</h2>
	<hr>
	<h3><i class="glyphicon glyphicon-time">{{ ucwords($project->created_at) }}</i></h3>
	<hr>
	<p class="lead">{{ $project->description }}</p>
	<p class="lead">{{ $project->exercise01 }}</p>
	<p class="lead">{{ $project->exercise01_weight }}</p>
	<p class="lead">{{ $project->exercise01_reps }}</p>

	<img class="img-responsive" src="../{{ $project->image }}">
	
                @foreach ($project->projectimages as $projectimage)
                	<div class="col-md-6">
                    
                	<h4>{{ $projectimage->id }}</h4>
                    <h4>{{ $projectimage->name }}</h4>
                    
                    <p>{{ $projectimage->link }}</p>
                    
                    </div>
                    <div class="col-sm-4">
                    <img class="img-responsive" src="../{{ $projectimage->image1 }}">
                    <img class="img-responsive" src="../{{ $projectimage->image2 }}">
                    <img class="img-responsive" src="../{{ $projectimage->image3 }}">
                    </div>
                @endforeach
                
</div>

<div class="col-lg-4">
	<div class="well">
		<legend>What would you like to do next?</legend>
		{{ link_to_route('portfolios.edit', 'Update', array($project->id), array('class' => 'btn btn-primary')) }}
		{{ link_to_route('portfolios.index', 'Back to index', null, array('class' => 'btn btn-warning')) }}
		<br>
	</div>
</div>
        </div>
    </div>

    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
            </div>
        </div>
    </footer>

</div><!-- /.container -->

@stop