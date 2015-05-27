<?php
	$host="localhost"; //replace with database hostname 
	$username="root"; //replace with database username 
	$password="mysql"; //replace with database password 
	$db_name="gjm"; //replace with database name

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="SELECT * FROM barang";

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
	echo json_encode($json); 
?> 