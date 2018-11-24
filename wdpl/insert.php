<?php
	include("../control/cnfig.php");
	
	$name = $_POST['name'];
	$id = $_POST['stid'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$sql="INSERT INTO stdinfo(stid,name,uname,password) VALUES('$id','$name','$uname','$pass')";
	
	$result=mysqli_query($myconn,$sql);
	
	if($result===TRUE)
	{
		echo("user information added sucessfull");
	}
	else
	{
		echo("user information added unsucessfull");

	}
	header("Location:form.php");
?>