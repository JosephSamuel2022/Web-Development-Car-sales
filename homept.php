<!DOCTYPE html>
<html>

<head>
<title>FORM</title>
<link rel="stylesheet" type="text/css" href="styles3.css">

<style>
body {background-color: slateblue;}
label {color: yellow;}
</style>
</head>
<body>
<p>
<?php

session_start();
echo"Hi ".$_SESSION['username'].",";
?>
</p>
<h1><center>Company order form:<center></h1>

<form action="validationpt.php" method="POST">
            <label >Model:</label><br>
           <select  name="model" id="output" onchange="random_function1()">
           <option value="Camry">Camry</option>
            <option value="Yaris">Yaris</option>
            <option value="Fortuner">Fortuner</option>
           </select>
       	<br>
       <label >Quantity:</label><br>
       <input name="quantity" type="number" min=1 max=100>
        <br><br>
    <input type="submit" name="Sub" value="Submit">

</form> 

<p>If you click the "Submit" button, the form-data will be submitted.</p>
<a style="color:#CCFF00 " href="vieworder.php">View the order requests</a><br><br>

</body>
</html>
