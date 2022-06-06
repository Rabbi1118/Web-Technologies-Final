<?php
if(isset($_POST["btnLogin"]))
{
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="regist_db";
	$uname=$_POST["uname"];
	$userpass=$_POST["pass"];
	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error)
		die("Connection failed:".$con->connect_error);
	else
	{
		$q="select * from admin where Username='".$uname."' and Password='".$userpass."'";
		$result=$con->query($q);
		if($result->num_rows>0)
			
			while ($row = $result->fetch_assoc())
			{
				$_SESSION["loggedinuser"]=$row["Name"];
				header("location:Dashboard.php");
			}
		else
			

			echo '<script type="text/javascript">';
			echo ' alert("Invalid Login information")';  
			echo '</script>';
	}
}
?>