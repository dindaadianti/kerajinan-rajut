<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/login.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(../images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Rajutan Handmade</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
				      	<h3 class="mb-4 text-center">Register an Account</h3>
				      	<form action="proses-regis.php" method="post" class="signin-form">
				      		<div class="form-group">
				      			<input type="text" class="form-control" placeholder="Username" name="username" required>
				      		</div>
				            <div class="form-group">
				              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
				              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				            </div>
				            <div class="form-group">
				      			<input type="email" class="form-control" placeholder="Email" name="email" required>
				      		</div>
				            <div class="form-group">
				            	<button type="submit" class="form-control btn btn-primary submit px-3">Register</button><hr>
				            	<button type="reset" class="form-control btn btn-danger reset px-3">Cancel</button>
				            </div>
				            <div class="form-group">
				            	<label>Already Have an Account? Let's <a href="../authentication/login.php">Login</a>
								</label>
			            	</div>
			          	</form>
		    		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../js/jquery.min.js"></script>
  	<script src="../js/popper.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
  	<script src="../js/login.js"></script>

	</body>
</html>