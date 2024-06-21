<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Admin Dashboard Templates" />
		<meta name="keywords"
			content="Admin, Dashboard, Bootstrap 4 Admin Dashboard, Bootstrap 4 Admin Template, 404, Error, Admin Dashboard, Dashboard, Bootstrap 4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="{{ asset('img/main.jpg') }}" />
		<title>404</title>

		<!--
			**********************
			**********************
			Common CSS files
			**********************
			**********************
		-->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

		<!-- Icomoon Icons CSS -->
		<link rel="stylesheet" href="{{ asset('fonts/icomoon/icomoon.css') }}" />

		<!-- Master CSS -->
		<link rel="stylesheet" href="{{ asset('css/main.min.css') }}" />

	</head>

	<body class="login-bg">
		<div class="error-screen">
			<img src="img/error.svg" alt="404" />
			<h6>The Page You Requested Could Not Be Found.</h6>
			<a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn btn-info btn-rounded">Back To Home <i class="icon-chevron-right"></i></a>
		</div>
	</body>

</html>
