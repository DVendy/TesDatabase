<?php
include 'var.php';

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	  $_POST["version"] = "2015-01-01 00:00:00";
	 // $_POST["limit"] = 0;
	 // $_POST["offset"] = 5;
	$sql="SELECT * FROM barang WHERE lastupdate > '".$_POST["version"]."' OR status = 1 OR status = 10";

	if ($result=mysqli_query($con,$sql))
	{
	// Return the number of rows in result set
		$rowcount=mysqli_num_rows($result);
		//echo("Result set has ".$rowcount." rows.<br>");

		while($row = $result->fetch_assoc()){
			//echo $row['nama'] . " " . $row['nim'] . '<br>';
			foreach ($row as $key => $value) {
				$row[$key] = utf8_encode($value);
			}
			$json[$db_name][]=$row;
		}

	// Free result set
		mysqli_free_result($result);
	}

	mysqli_close($con);
	// echo $_POST["limit"];
	// echo $_POST["offset"];
	echo json_encode($json); 
?> 