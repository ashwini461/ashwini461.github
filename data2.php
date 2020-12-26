<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","temperature");

	$sqlQuery = "SELECT * from chartdata1  order by id desc limit 1";
	$result = mysqli_query($conn,$sqlQuery);
	 while ($rows = mysqli_fetch_array($result)) 
    {
    	$id=$rows['devid'];
    	$sdate=$rows['sdate'];
    	$ldate=$rows['ldate'];

   	}
   //	echo $id.",".$sdate.",".$ldate;
   	$sqlQuery = "SELECT temp,timestamp1 from sensordata2 where devid='$id' AND timestamp1 between '$sdate' AND '$ldate'";

	$result = mysqli_query($conn,$sqlQuery);
	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}


	mysqli_close($conn);
	//print_r($data);
	echo json_encode($data);

?>