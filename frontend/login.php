<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../public/css/bootstrap5.css">
	<link rel="stylesheet" type="text/css" href="../public/css/login.css">
</head>
<body>
	<div class="container Loginfrom">
		<div class="pinkBg">
			<div class="box signin">
				<h2>Already Have an Account</h2>
				<button class="signinBtn">Sign in</button>
			</div>
			<div class="box signup">
				<h2>Don't Have an Account ?</h2>
				<button class="signupBtn">Sign up</button>
			</div>
		</div>
		<div id="formBx" class="formBx">
			<div class="form signinForm">
				<form>
					<h3>Sign In</h3>
					<input type="email" class="form-control mb-3" placeholder="Email Address" required autocomplete="email" autofocus>
					<input type="password" class="form-control mb-3"  placeholder="Password">
					<input type="submit" value="Login">
					<a href="#" class="forgot">Forgot Password</a>
				</form>
			</div>

			<div class="form signupForm">
				<form>
					<h3>Register</h3>
					<input type="text" class="form-control mb-3" placeholder="Username">
					<input type="email" class="form-control mb-3" placeholder="Email Address">
					<input type="password" class="form-control mb-3"  placeholder="Password">
					<input type="password" class="form-control mb-3"  placeholder="Confirm Password">
					<input type="submit" value="Register">
				</form>
			</div>
		</div>	
	</div>


    <script type="text/javascript" src="../public/js/custom.js"></script>  
    <script type="text/javascript" src="../public/js/bootstrap5.bundle.js"></script>
    <script type="text/javascript" src="../public/js/jquery-3.6.0.min.js"></script>
</body>
</html>