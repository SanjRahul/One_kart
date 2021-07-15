<?php  
session_start();
require"./connection/connection.php";
$msg='';
if(isset($_POST['admin_login'])){
    $admin_name = $_POST['email'];
    $password=$_POST['password'];

    $q="select * from admin_user where username='$admin_name' and password='$password'";
    $r=mysqli_query($con,$q);
    $count=mysqli_num_rows($r);
    if($count>0){
		$_SESSION['ADMIN_Login']=$admin_name;
		header('Location:./frontend/admin_dashboard.php');
    }else{
        $msg="Please Enter Correct Login details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="./public/css/bootstrap5.css">
	<link rel="stylesheet" type="text/css" href="./public/css/login.css">
</head>
<body>
	<div class="container Loginfrom">
		<div class="pinkBg">
			<div class="box signin">
				<h2>Already Have an Account</h2>
				<button class="signinBtn">Sign in</button>
			</div>
			<div class="box signup">
				<h2>Welcome to Onekart</h2>
				<button class="signupBtn">Sign In</button>
			</div>
		</div>
		<div id="formBx" class="formBx form signinForm">
			<div class="form signinForm">
				<form id="quickForm" method="post">
					<div class="msg">
						<?php echo $msg; ?>
					</div>
					<h3>Sign In</h3>
					<div class="form-group">
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autofocus>
					</div>
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
					<input type="submit" value="Login" name="admin_login">
					<a href="#" class="forgot">Forgot Password</a>
				</form>
			</div>
		</div>	
	</div> 
    
    <script type="text/javascript" src="./public/js/bootstrap5.bundle.js"></script>
    <script type="text/javascript" src="./public/js/jquery-3.6.0.min.js"></script>
	<!-- jquery-validation -->
	<script src="./public/css/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="./public/css/plugins/jquery-validation/additional-methods.min.js"></script>
  <script type="text/javascript" src="./public/js/custom.js"></script>
</body>
</html>