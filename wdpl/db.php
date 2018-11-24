<?php

	// localhost , root , ""  java ,c c++ int a = 29;
	
	//server connect start
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	
	
	$myconn = mysqli_connect("$dbhost","$dbuser","$dbpass"); 
	//$myconn  = mysqli_connect("localhost","root","");
	
	if(mysqli_connect_error())
	{
		echo mysqli_connect_error();
		
	}
	//server connect end 
	
	$sql="CREATE DATABASE ata"; //practise with other name
	
	$result = mysqli_query($myconn,$sql); // query chalano r jonno
	
	if($result===TRUE)
	{
		echo "db create successfull";
	}
	else
	{
		echo "db not created successfull";
		
	}

?>