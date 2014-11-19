@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
@if($projects->count())

    <div class="col-md-8">
    
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>username</th>
                    <th>Description</th>
                    <th>Date Created</th>
                    <th>Preview</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->user->username}}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>{{ substr($project->description, 0, 120). '[...]'}}</td>
                    <td>{{ link_to_route('portfolios.show', 'Preview', array($project->id), array('class' => 'btn btn-success')) }}</td>
                    <td>{{ link_to_route('portfolios.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('portfolios.destroy', $project->id))) }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="alert alsert-info col-md-4" style="margin-top: 15px">You currently have no posts</div>
    @endif
<div class="col-md-4">
    <div class="well">
    {{ link_to_route('portfolios.create', 'Create a new post', null, array('class' => 'btn btn-primary')) }}
    <h4 class="projectHyperLink">These are your current posts</h4>
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