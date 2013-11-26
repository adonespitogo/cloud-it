<!DOCTYPE html>
<html>
<head>
	@yield('head')
	{{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600|Open+Sans:400,600,300') }}
	<link rel="Shortcut Icon" type="image/ico" href="{{URL::to('favicon.ico')}}">
</head>
<body>
	@yield('header')
	@yield('content')
	@yield('footer')
</body>
</html>