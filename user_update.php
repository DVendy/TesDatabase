<?php
include 'var.php';

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//$_POST["version"] = "2015-06-08 15:20:21";
	$sql="UPDATE users SET name = '".$_POST["name"]."', md5 = '".$_POST["md5"]."' WHERE id = '".$_POST["id"]."'";

	if ($con->query($sql) === TRUE) {
	    echo "Done";
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
?>