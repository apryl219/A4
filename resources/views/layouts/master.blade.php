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
		@if(Session::get('message') !=null)
			<div class='message'>{{ Session::get('message') }}</div>
		@endif
		<header>
			@yield('nav')
		</header>
		<section>
			@yield('content')
		</section>
	</body>
</html>