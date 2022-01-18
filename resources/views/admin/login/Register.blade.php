<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
	<!-- loader-->
	@include('admin.layout-admin.style')

</head>

<body class="bg-theme bg-theme1">

	<!-- start loader -->
	<div id="pageloader-overlay" class="visible incoming">
		<div class="loader-wrapper-outer">
			<div class="loader-wrapper-inner">
				<div class="loader"></div>
			</div>
		</div>
	</div>
	<!-- end loader -->

	<!-- Start wrapper-->
	<div id="wrapper">

		<div class="card card-authentication1 mx-auto my-4">
			<div class="card-body">
				<div class="card-content p-2">
					@if (Session::has('success'))
					<p class="text-warning mb-0">{{ Session('success') }}? <a href="{{ route('login.index') }}">
							Đăng Nhập</a></p>
					@endif
					<div class="text-center">
						<img src="{{ asset('adminlte/images/logo-icon.png') }}" alt="logo icon">
					</div>
					<div class="card-title text-uppercase text-center py-3"></div>
					<form action="{{ route('register.index') }}" method="POST">
						@csrf
						<div class="form-group">
							<label for="exampleInputName" class="sr-only">Name</label>
							<div class="position-relative has-icon-right">
								<input type="text" id="exampleInputName" name="name"
									class="form-control input-shadow" placeholder="Enter Your Name">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmailId" class="sr-only">Email ID</label>
							<div class="position-relative has-icon-right">
								<input type="email" id="exampleInputEmailId" name="email"
									class="form-control input-shadow" placeholder="Enter Your Email ID">
								<div class="form-control-position">
									<i class="icon-envelope-open"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword" class="sr-only">Password</label>
							<div class="position-relative has-icon-right">
								<input type="password" id="exampleInputPassword" name="password"
									class="form-control input-shadow" placeholder="Choose Password">
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="icheck-material-white">
								<input type="checkbox" id="user-checkbox" checked="" />
								<label for="user-checkbox">I Agree With Terms & Conditions</label>
							</div>
						</div>

						<button type="submit" class="btn btn-light btn-block waves-effect waves-light">Sign
							Up</button>
						<div class="text-center mt-3">Sign Up With</div>

						<div class="form-row mt-4">
							<div class="form-group mb-0 col-6">
								<button type="button" class="btn btn-light btn-block"><i
										class="fa fa-facebook-square"></i> Facebook</button>
							</div>
							<div class="form-group mb-0 col-6 text-right">
								<button type="button" class="btn btn-light btn-block"><i
										class="fa fa-twitter-square"></i> Twitter</button>
							</div>
						</div>

					</form>
				</div>
			</div>
			<div class="card-footer text-center py-3">
				<p class="text-warning mb-0">Already have an account? <a href="{{ route('login.index') }}"> Sign In
						here</a></p>
			</div>
		</div>
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	</div>
	@include('admin.layout-admin.script')
</body>

</html>