<?php

if(isset($_POST['id'])&&isset($_POST['loc'])&&isset($_POST['sdate'])&&isset($_POST['ldate']))
 {
 $id=$_POST['id'];
 $loc=$_POST['loc'];
 $sdate=$_POST['sdate'];
 $ldate=$_POST['ldate'];

$conn = mysqli_connect("localhost","root","","temperature");
$sqlQuery = "INSERT INTO chartdata1(id, devid, location, sdate, ldate) VALUES (NULL,'$id','$loc','$sdate','$ldate')";

 mysqli_query($conn, $sqlQuery);

}






?>