<!DOCTYPE html>
<html>
	<head>
		
		<title>
			@yield('title', 'Movie Magazine')
		</title>
		<meta charset="utf-8">
		@stack('head')
	</head>
	<body>
		<header>
			@yield('nav')
		</header>
		<section>
			@yield('content')
		</section>
	</body>
</html>