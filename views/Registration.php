<?php
if(isset($_POST["btnRegister"]))
{
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="regist_db";
	$name=$_POST["name"];
	$useremail=$_POST["email"];
	$userphone=$_POST["phoneNo"];
	$uname=$_POST["uname"];
	$userpass=$_POST["pass"];

	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error)
		die("Connection failed:".$con->connect_error);
	else
	{
		$q="INSERT INTO admin (Name,Email,Phone,Username,Password) VALUES('".$name."','".$useremail."','".$userphone."','".$uname."','".$userpass."')";
		$res=$con->query($q);
	}
}
?>

<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="registration.css">
	</head>
	<body>
		<div class="container">
			<div class="upper">
				<h3>Registration</h3>
			</div>
			<form action="#" method="post" class="form" id="form" onsubmit="return validate();">
                
				
				<div class="form-control3" id="form-control3">
					<label>Name:</label>
					<input type="text" id="name" name="name" placeholder="  Enter Name">
					<i id="success1" class="fas fa-check-circle"></i>
				    <i id="error1" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<div class="form-control4" id="form-control4">
					<label>Email:</label>
					<input type="text" id="email" name="email" placeholder="  Enter Email">
					<i id="success2" class="fas fa-check-circle"></i>
				    <i id="error2" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<div class="form-control5" id="form-control5">
					<label>Phone Number:</label>
					<input type="text" id="phoneNo" name="phoneNo" placeholder="  Enter Phone Number">
					<i id="success3" class="fas fa-check-circle"></i>
				    <i id="error3" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<div class="form-control" id="form-control">
					<label>Username:</label>
					<input type="text" id="uname" name="uname" placeholder="  Enter Username">
					<i id="success4" class="fas fa-check-circle"></i>
				    <i id="error4" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<div class="form-control1" id="form-control1">
					<label>Password:</label>
					<input type="password" id="pass" name="pass" placeholder="  Enter Password">
					<i id="success5"class="fas fa-check-circle"></i>
					<i id="error5"class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
				<button type="submit" name="btnRegister">Register</button>
                <p>Already have an account? <a href="Login.php">Sign In</a></p>
			</form>
		</div>

        <script>src='validation.js'</script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	</body>
</html>