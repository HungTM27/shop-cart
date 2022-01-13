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

		<div class="loader-wrapper">
			<div class="lds-ring">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<img src="{{ asset('adminlte/images/logo-icon.png') }}" alt="logo icon">
					</div>
					<div class="card-body login-card-body">
						@if(session('msg'))
						<p class="text-white">{{session('msg')}}</p>
						@else
						<div class="card-title text-uppercase text-center py-3">Sign In</div>
						@endif
						<form action="" method="post">
							@csrf
							<div class="form-group">
								<label for="exampleInputUsername" class="sr-only">Username</label>
								<div class="position-relative has-icon-right">
									<input type="email" id="exampleInputUsername" name="email"
										class="form-control input-shadow" placeholder="Enter Username">
									<div class="form-control-position">
										<i class="icon-user"></i>
									</div>
									@error('email')
									<p class="text-white mt-2">{{$message}}</p>
									@enderror
								</div>
							</div>

							<div class="form-group">
								<label for="exampleInputPassword" class="sr-only">Password</label>
								<div class="position-relative has-icon-right">
									<input type="password" id="exampleInputPassword" name="password"
										class="form-control input-shadow" placeholder="Enter Password">
									<div class="form-control-position">
										<i class="icon-lock"></i>
									</div>
									@error('password')
									<p class="text-white mt-2 ">{{$message}}</p>
									@enderror
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-6">
									<div class="icheck-material-white">
										<input type="checkbox" id="user-checkbox" checked="" />
										<label for="user-checkbox" name="remember">Remember me</label>
									</div>
								</div>
								<div class="form-group col-6 text-right">
									<a href="{{ route('resetpassword.index') }}">Reset Password</a>
								</div>
							</div>
							<button type="submit" class="btn btn-light btn-block">Sign In</button>
							<div class="text-center mt-3">Sign In With</div>
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
					<p class="text-warning mb-0">Do not have an account? <a href="{{ route('register.index') }}">
							Sign
							Up here</a></p>
				</div>
			</div>

			<!--Start Back To Top Button-->
			<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
			<!--End Back To Top Button-->

		</div>
		<!--wrapper-->

		<!-- Bootstrap core JavaScript-->
		@include('admin.layout-admin.script')

</body>