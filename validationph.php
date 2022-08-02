<?php

session_start();

include "config.php";

$un=$_SESSION['username'];
$m=$_POST['model'];
$q=$_POST['quantity'];




$sql="update company_cars set quantity=quantity+'$q' where company='$un' and model='$m'";
$result=mysqli_query($conn,$sql);



$_SESSION['username']=$un;

header("location:homeph.php");

?>
