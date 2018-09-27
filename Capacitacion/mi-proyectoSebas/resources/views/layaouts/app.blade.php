<!DOCTYPE html>
<html>
	<head>
		<title>Sebas - @yield('title')</title>
	</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<body>
		<nav class="navbar navbar-dark bg-primary">
			<a href="#" class="navbar-brand">SebasTrainers</a>
		</nav>
		<div class="container">
	 		@yield('content')
	 	</div>
	 	<div class="navbar navbar-dark bg-primary">
 			<a href="#" class="navbar-brand">SebasTrainers</a>
 		</div>
	</body>
</html>