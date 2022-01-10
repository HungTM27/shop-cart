<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Reset Password</title>
	<!-- loader-->
	@include('admin.layout-admin.style')

</head>

<body class="bg-theme bg-theme1">

	<!-- Start wrapper-->
	<div id="wrapper">

		<div class="height-100v d-flex align-items-center justify-content-center">
			<div class="card card-authentication1 mb-0">
				<div class="card-body">
					<div class="card-content p-2">
						<div class="card-title text-uppercase pb-2">Reset Password</div>
						<p class="pb-2">Please enter your email address. You will receive a link to create a new
							password via email.</p>
						<form action="" method="post">
							<div class="form-group">
								<label for="exampleInputEmailAddress" class="">Email Address</label>
								<div class="position-relative has-icon-right">
									<input type="email" id="exampleInputEmailAddress" name="email"
										class="form-control input-shadow" placeholder="Email Address">
									<div class="form-control-position">
										<i class="icon-envelope-open"></i>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-light btn-block mt-3">Reset Password</button>
						</form>
					</div>
				</div>
				<div class="card-footer text-center py-3">
					<p class="text-warning mb-0">Return to the <a href="login.html"> Sign In</a></p>
				</div>
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

</html>