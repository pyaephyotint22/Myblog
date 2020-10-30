	<!DOCTYPE html>
	<html>
	<head>
		<title>The Pizza</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="{{asset('mytemplateassets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<script src="{{asset('mytemplateassets/bootstrap/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('mytemplateassets/bootstrap/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
	<link href="{{asset('mytemplateassets/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('mytemplateassets/style.css')}}" rel="stylesheet" type="text/css">

	</head>
	<body>
		<!-- Navigation -->
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light py-4 fixed-top menu">
				<a href="" class="navbar-brand">Pizza Delivery</a>
				<div class="container">

					<button class="navbar-toggler" type="button" data-toggle="collapse" 
					data-target="#myNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="myNav" class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="{{route('homepage')}}" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="{{route('itempage')}}" class="nav-link">Item</a></li>
						<li class="nav-item"><a href="{{route('aboutpage')}}" class="nav-link">About</a></li>
						<li class="nav-item"><a href="{{route('contactpage')}}" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="{{route('studentpage')}}" class="nav-link">Student</a></li>
					</ul>
				</div>
			</div>
/</nav>
		@yield('content')
		<!-- Footer -->
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
				<a href="" class="navbar-brand">© Design By Pyae Phyo Tint </a>
				<div class="container">

					<button class="navbar-toggler" type="button" data-toggle="collapse" 
					data-target="#myNav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="myNav" class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="fb-ic">
							<i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a></li>
						<li class="nav-item"><a class="tw-ic">
							<i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a></li>
						<li class="nav-item"> <a class="ins-ic">
							<i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a></li>
						<li class="nav-item"><a class="gplus-ic">
							<i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
						</a> </i>
					</a></li>
				</ul>
			</div>
		</div>
	</nav>

	</body>
	</html>