<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel and Angular Comment System</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.comment 	{ padding-bottom:20px; }
	</style>

	<!-- JS -->  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-route.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-resource.js"></script>


	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/projectsService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="myApp" ng-controller="mainController">

	<div class="col-md-4">
		<h2>Portfolio</h2>

		<form ng-submit="submitComment()"> <!-- ng-submit will disable the default form action and use our function -->

		<!-- AUTHOR -->
		<div class="form-group">
			<input type="text" class="form-control input-sm" name="author" ng-model="projectData.name" placeholder="Name">
		</div>

		<!-- COMMENT TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="comment" ng-model="projectData.description" placeholder="Say what you have to say">
		</div>
		
		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">	
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>

	<pre>
	{{ projectData }}
	</pre>

	<!-- LOADING ICON -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE COMMENTS -->
	<!-- hide these comments if the loading variable is true -->
	<div class="comment" ng-hide="loading" ng-repeat="laravelproject in laravelprojects"> 
		<h3>Comment #{{ laravelproject.id }} <small>by {{ laravelproject.name }}</h3>
		<p>{{ laravelproject.description }}</p>

		<p><a href="#" ng-click="deleteComment(laravelproject.id)" class="text-muted">Delete</a></p>
	</div>

	<div class="col-md-8"></div>

</body>
</html>