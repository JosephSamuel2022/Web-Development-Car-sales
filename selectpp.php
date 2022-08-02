<?php

session_start();

include "config.php";

$un=$_POST['fname'];
$pwd=$_POST['password'];


$sql="select * from company_listp where name='$un' and password='$pwd'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if ($count>0){

header("location: homepp.php");
$_SESSION['username']=$un;
}
else{
header("location:loginpp.php");
}
?>
