@extends('layouts.single')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
                <!-- <a href="http://laravel.com" title="Laravel PHP Framework"></a> -->
                <h3>Project Id</h3>
                <div class="col-md-4">

                <h2>{{ $projectimages->id }}</h2>
                <h2 class="projectTitle">{{ $projectimages->name }}</h2>
                <img class="img-responsive" src="../{{ $projectimages->image1 }}">
                <img class="img-responsive" src="../{{ $projectimages->image2 }}">
                <img class="img-responsive" src="../{{ $projectimages->image3 }}">
                <p><a href="{{$projectimages->link}}">link</a></p>

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