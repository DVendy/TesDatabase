<?php
	$host="localhost"; //replace with database hostname 
	$username="root"; //replace with database username 
	$password=""; //replace with database password 
	$db_name="gjm"; //replace with database name

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$sql = "INSERT INTO login_history (date, user_id)
VALUES ('".$_POST["date"]."', '".$_POST["user_id"]."')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
