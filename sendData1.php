<?php

include "config.php";


	if(isset($_GET['id'])&&isset($_GET['ptemperature']))
	{
		$a=$_GET['id'];
		$b=$_GET['ptemperature'];
		echo $a .",". $b;

		$sql="INSERT INTO `sensordata2`( `devid`, `temp`) VALUES ('$a','$b')";
		mysqli_query($con,$sql);
		mysqli_close($con);
	}
	//header('location:b.php');
	

?>