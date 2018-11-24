<?php
	include('cnfig.php');
	
	$stdinfo = "CREATE TABLE IF NOT EXISTS stdinfo(stid INT(11) NOT NULL,
	name VARCHAR(50) NOT NULL,

	uname VARCHAR(50) NOT NULL,
	password VARCHAR(50) NOT NULL,
	PRIMARY KEY(stid)
	)";
	
	$result=mysqli_query($myconn,$stdinfo); // mendatory
	
	if($result===TRUE)
	{
		echo"student info table created";
	}
	else
	{
			echo"student info table not created";

	}

?>
