@extends ('layouts.admin')

@section ('content')

	<div class="container">
		<div class="row">
    		<div class="col-lg-12">

			<div class="col-md-4">
				<div class="panel panel info">
					<div class="panel-heading dashboardTitle">Dashboard</div>
						<div class="panel-body">

						<h2 class="dashboardText">Hello {{ ucwords(Auth::user()->username) }}</h2>
						<h2 class="dashboardText"> {{ ucwords(Auth::user()->email) }}</h2>
						{{ HTML::link('logout', 'Logout', array('class' => 'btn btn-success')) }}
						{{ HTML::linkRoute('portfolio.index', 'Projects', array('class'=>'btn btn-info'))}}

						</div>

				</div>
			</div>

		<div class="col-md-8"></div> 

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