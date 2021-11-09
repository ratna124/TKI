

<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<a href="index.php" style="color: #fff">Back to Landing Page</a>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">PT. HENDRARTA ARGARAYA</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Register</h3>
		      	<form action="prosesregistrasi.php" method="post">
                  <div class="form-group">
		      			<input type="text" class="form-control" name="nama" placeholder="Enter name" id="nama">
		      		</div>
                  <div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Enter username" id="username">
		      		</div>
	            <div class="form-group">
	              <input type="password" class="form-control" name="password" placeholder="Enter password" id="password">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
		      			<input type="text" class="form-control" name="role" placeholder="Enter role" id="role">
		      		</div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
						<input type="checkbox" checked>
							<span class="checkmark"></span>
						</label>
					</div>
				<div class="w-50 text-md-right">
					<a href="#" style="color: #fff">Forgot Password</a>
				</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">
			  <a href="login.php" style="color: #67b4f5">&mdash; Or Already Have an Account &mdash;</a>
			</p>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

