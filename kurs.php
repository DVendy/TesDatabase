<?php
include 'var.php';

	$con=mysqli_connect($host,$username,$password,$db_name);
	// Check connection
	if (mysqli_connect_errno())
	{
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//$_POST["id"] = "0";
	$sql="SELECT * FROM kurs";

	if ($result=mysqli_query($con,$sql))
	{
	// Return the number of rows in result set
		
		$rowcount=mysqli_num_rows($result);
		//die(var_dump($rowcount));
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
	//echo $_POST["version"];
	echo json_encode($json); 
?>