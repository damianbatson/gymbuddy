@extends('layouts.single')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
    <div class="col-md-4">
        <!-- <a href="http://laravel.com" title="Laravel PHP Framework"></a> -->
        <h3>Project Id</h3>

        <h2>{{ $project_images->id }}</h2>
        <h2>{{ $project_images->name }}</h2>
        <img class="img-responsive" src="../{{ $project_images->image1 }}">
        <img class="img-responsive" src="../{{ $project_images->image2 }}">
        <img class="img-responsive" src="../{{ $project_images->image3 }}">
        <p><a href="{{$project_images->link}}">link</a></p>

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
@stop