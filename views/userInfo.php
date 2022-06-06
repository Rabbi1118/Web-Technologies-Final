<?php

$servername="localhost";
$username="root";
$password="";
$dbname="reg_db";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="select * from reg_info";
	$result=$conn->query($q);
	$output='<table border="1" width=100%> <tr><th>ID</th> <th>Name</th><th>Email</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr><td>'.$row["Id"].'</td><td>'.$row["Name"].'</td><td>'.$row["Email"].'</td></tr>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
