@extends ('layouts/admin')

@section ('content')

<!-- <div class="container">
	<div class="row">
		<div class='col-lg-12'> -->
			<div class="col-md-4">
			<div class="panel panel info">
				<div class="panel-heading">Dashboard</div>
				<div class="panel-body">

				<h2>Hello {{ ucwords(Auth::user()->username) }}</h2>
				<h2> {{ ucwords(Auth::user()->email) }}</h2>
				{{ HTML::link('logout', 'Logout') }}
				</div>

			</div>
			</div>

			<div class="col-md-8"></div>

<!-- 		</div>
	</div>
</div> -->

@stop