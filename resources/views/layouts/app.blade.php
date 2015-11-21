<!-- Stored in resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
	<title>MyRezzi | @yield('title')</title>

	<link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css'); ?>">

	<!-- Slick Carousel -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset('slick/slick.css'); ?>"/>
	<!-- Carousel Styling -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset('slick/slick-theme.css'); ?>"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

	<!-- TypeKit -->
	<script src="https://use.typekit.net/osu1vkn.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

</head>
<body>

	@yield('content')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
				
</body>
</html>