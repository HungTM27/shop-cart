<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Pages NotFound</title>
	<!-- loader-->
	@include('admin.layout-admin.style')
</head>
<div class="container">
	<div class="center" style="margin-top: 150px; margin-bottom: 30px; text-align: center">
		<p class="text-center" style="font-size:100px">404</p>
		<h1>Page not found!</h1>
		<p>Sorry, but the page you were looking for could not be found.</p>
		<a href="{{ route('welcome') }}">Quay Lại Trang Chủ</a>
	</div>
</div>

<body class="bg-theme bg-theme1">
	<!-- Bootstrap core JavaScript-->
	@include('admin.layout-admin.script')

</body>