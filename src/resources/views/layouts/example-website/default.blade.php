<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Page Title -->
	<title>Apiarist - Example Website - @yield('page-title', 'Page Title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- Font Awesome 5.0.13 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Head Inserts -->
	@yield('page-head')
</head>
<body>
	<div class="container pt-5 pb-5">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
			<a class="navbar-brand" href="{{ url('apiarist/example-website/home') }}">
				<i class="fa fa-cube"></i>
				Apiarist
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
				    <li class="nav-item">
				        <a class="nav-link" href="{{ url('apiarist/example-website/home') }}">Home</a>
				    </li>

			    	<li class="nav-item">
			        	<a class="nav-link" href="{{ url('apiarist/example-website/about-us') }}">About Us</a>
			    	</li>

			    	<li class="nav-item">
			        	<a class="nav-link" href="{{ url('apiarist/example-website/contact-us') }}">Contact Us</a>
			    	</li>
			    </ul>
			</div>
		</nav>

		<!-- Page Content -->
		@yield('page-content')
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Body Inserts -->
	@yield('page-scripts')
</body>
</html>
