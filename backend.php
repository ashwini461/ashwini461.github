<?php
 include 'config1.php';
 extract($_POST);

 //insert data
 if(isset($_POST['srno'])&&isset($_POST['devid'])&&isset($_POST['mp'])&&isset($_POST['unit'])&&  isset($_POST['location']))
 {
    $sql="INSERT INTO thresholdtbl1(srno,devid,mp,unit,location,maxthreshold,flag,curval)VALUES('$srno','$devid','$mp','$unit','$location',55,0,0)";
    mysqli_query($con,$sql);
 }

 //display data
 if(isset($_POST['readrecord']))
 {
 	$data='<table class="table table-bordered table-striped"> <tr>
 		<th>No.</th><th>Serial No.</th>
 		<th>Device Id</th>
 		<th>Measuring Parameter</th>
 		<th>Unit</th>
 		<th>Location</th>
 		<th>Maxthreshold</th>
 		<th>Flag</th>
 		<th>Current Value</th>
 		<th>Action</th></tr>';

 	$sql="SELECT * FROM thresholdtbl1";
 	$result=mysqli_query($con,$sql);
 	if(mysqli_num_rows($result)>0)
 	{
 		$number =1;
	 	while($row=mysqli_fetch_array($result))
	 	{
	 		$data.='<tr>
		 		<td>'.$number.'</td>
		 		<td>'.$row['srno'].'</td>
		 		<td>'.$row['devid'].'</td>
		 		<td>'.$row['mp'].'</td>
		 		<td>'.$row['unit'].'</td>
		 		<td>'.$row['location'].'</td>
		 		<td>'.$row['maxthreshold'].'</td>
		 		<td>'.$row['flag'].'</td>
		 		<td>'.$row['curval'].'</td>              
		 	    <td><button class="btn btn-warning" onclick="getDevice('.$row['tid'].') ">Edit</button> 
		 	    <button class="btn btn-danger" onclick="deleteDevice('.$row['tid'].') ">Delete</button></td></tr>';
		 	    	$number++;
	 	}
	 
 	}
 	$data.='</table>';
 	echo $data;
}

//delete record
if(isset($_POST['deleteid']))
{
	$id=$_POST['deleteid'];
	$sql="DELETE FROM `thresholdtbl1` WHERE tid='$id'";
	mysqli_query($con,$sql);
}
//update record
if(isset($_POST['Id'])&& isset($_POST['Id'])!= "")
{
	$id=$_POST['Id'];
	$sql="SELECT * FROM thresholdtbl1 WHERE tid='$id'";
	$result=mysqli_query($con, $sql);
	$response=array();
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$response=$row;
		}
	}else{
		$response['status']=200;
		$response['message']="Data not found";

	}
	echo json_encode($response);
}

else{
	$response['status']=200;
		$response['message']="Invalid Request";

}
    // update table
    if(isset($_POST['hiddenidupd']))
    {
    	$uhiddenid=$_POST['hiddenidupd'];
    	$usno=$_POST['snoupd'];
		$uid=$_POST['idupd'];
		$ump=$_POST['mpupd'];
	     $Unit=$_POST['unitupd'];
		 $uloc=$_POST['locupd'];

		 $sql="UPDATE `thresholdtbl1` SET `srno`='$usno',`devid`='$uid',`mp`='$ump',`unit`='$Unit',`location`='$uloc' WHERE `tid`='$uhiddenid'";
		  
		 mysqli_query($con,$sql);
    }
 
 	?>