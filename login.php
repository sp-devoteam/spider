<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: assess.php");
}

//check if form is submitted
if (isset($_POST['login'])) {

#	$email = mysql_real_escape_string($con, $_POST['email']);
#	$password = mysql_real_escape_string($con, $_POST['password']);
#	$result = mysql_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");
#	$email = mysql_real_escape_string($_POST['email']);
#	$password = mysql_real_escape_string($_POST['password']);
#	$result = mysql_query("SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

include 'dbconnect.php';
connectDB();

	$email = $_POST['email'];
	$password = $_POST['password'];
	$result = mysqli_query($db, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: assess.php");
	} else {
		$errormsg = "Incorrect Username or Password!!!";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ready to Innovate?</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<style>

	#logo {
		background-color: white;
		position: absolute;
		width: 193px;
 		height: 65px;
 		bottom: 20px;
 		right: 20px;
		}
	
</style>	

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="images/innovate.png">  Ready to Innovate?</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<li><a href="https://ready-to-innovate.com/blog/using-rti/using-ready-to-innovate-rti/">Blog</a></li>

			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Username</label>
						<input type="text" name="email" placeholder="Your Username" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">

	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
	
<div id="logo">
<a href="https://www.devoteam.com/"><img src="images/devoteam_logo.png" alt="Devoteam Logo"></a>
</div>
	
</body>
</html>
