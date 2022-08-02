<?php
include "config.php";

$un=$_POST['fname'];
$pwd=$_POST['password'];
$email=$_POST['email'];

$sql="insert into company_list (name,password,email) values('$un','$pwd','$email')";

$result=mysqli_query($conn,$sql);

if ($result){
header("location:project.php");
}
else{
echo"error";
}
?>
