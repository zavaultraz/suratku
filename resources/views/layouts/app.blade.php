<!doctype html>
<html lang="en">

<head>
	<title>Auth Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('zen/assets/img/lgo.png')}}">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('auth/assets/css/style.css') }}">

</head>

<body>
	<div class="container p-md-5">
			@yield('content')
		</div>
	</div>

	<script src="{{asset('auth/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('auth/assets/js/popper.js') }}"></script>
	<script src="{{ asset('auth/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('auth/assets/js/main.js') }}"></script>

</body>

</html>