<?php

session_start();

include "config.php";

$un=$_POST['fname'];
$pwd=$_POST['password'];


$sql="select * from company_list where name='$un' and password='$pwd'";
$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if ($count>0){
if ($un=="Tata"){
header("location: homep.php");
$_SESSION['username']=$un;
}
elseif($un=="Hyundai"){
header("location: homeph.php");
$_SESSION['username']=$un;
}
else{
header("location: homept.php");
$_SESSION['username']=$un;
}
}
else{
header("location:project.php");
}
?>
