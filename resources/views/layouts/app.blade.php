<!DOCTYPE>
<html>
<head>
	<title>acme </title>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		<div class="row">
			<div class="col-md8 col-lg-8">
				@yield('content')
			</div>
		</div>			
	</div>
</body>
</html>