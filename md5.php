<?php
	$sung = "batman";
	echo $sung;
	echo "<br>";
	echo md5($sung);
	echo "<br>";
	echo "<br>";
	$hashed = md5($sung);
	if (md5("batman") == $hashed)
		echo "Bener";
	else
		echo "Salah";
?>