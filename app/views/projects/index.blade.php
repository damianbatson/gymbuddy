@extends('layouts.single')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="col-md-4">
                <!-- <a href="http://laravel.com" title="Laravel PHP Framework"></a> -->
                <h2>Portfolio</h2>

                @foreach ($projects as $project)
                	<!-- <div class="col-sm-6"> -->
                	<h2>{{ $project->id }}</h2>
                    <h2>{{ $project->name }}</h2>
                    <img class="img-responsive" src="{{ $project->image }}">
                    <p>{{ $project->description }}</p>
                    <p>{{ HTML::link('projects/'.$project->id, 'link to project') }}</p>

                    <!-- </div> -->
                @endforeach

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