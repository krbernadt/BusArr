<!doctype html>
<html lang="en">

<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="dist/log-css/style.css">
	<link href="dist/head-css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/head-css/swiper.css" rel="stylesheet">
	<link href="dist/head-css/styles.css" rel="stylesheet">
	<link rel="icon" href="dist/head-images/fav-bus-arr.png">
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
				<div class="container">
		
					<!-- Image Logo -->
					<a class="navbar-brand logo-image" href="index.html"><img src="dist/head-images/logo-arr.png" alt="alternative"></a> 
		
					<button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div> <!-- end of container -->
			</nav> <!-- end of navbar -->
			<br>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">

						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4" style="text-align: center;">Log In</h3>
								</div>
							
							</div>
							<form method="POST" action="cek-login.php" class="signin-form">
								<div class="form-group mt-3">
									<input name="email" id="inputEmail"type="text" class="form-control" required>
									<label class="form-control-placeholder" for="email">Email</label>
								</div>
								<br>
								<div class="form-group">
									<input name="psswd" id="inputPassword" type="text" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
								</div>
								<div class="form-group">
									<input type="submit" id="submit" class="form-control btn btn-primary rounded submit px-3" value="Login"></input>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="dist/log-js/jquery.min.js"></script>
	<script src="dist/log-js/popper.js"></script>
	<script src="dist/log-js/bootstrap.min.js"></script>
	<script src="dist/log-js/main.js"></script>


</body>

</html>