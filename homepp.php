<!DOCTYPE html>
<html>

<head>
<title>FORM</title>
<link rel="stylesheet" type="text/css" href="styles3.css">
<script>
            function random_function()
            {
                var a=document.getElementById("input").value;
                if(a==="Tata")
                {
                    var arr=["Nexon","Altroz","Safari"];
                }
                else if(a==="Hyundai")
                {
                    var arr=["i10","i20","Elantra"];
                }
                 else if(a==="Toyota")
                {
                    var arr=["Camry","Yaris","Fortuner"];
                }
             
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
            
function price(){
var b = document.forms["MyForm"]["model"].value;
if (b=='Nexon') {
  alert("The price is Rs.720000")
}
else if (b=='Altroz') {
  alert("The price is Rs.580000")
} 
else if (b=='Safari') {
  alert("The price is Rs.1500000")
} 
else if (b=='i10') {
  alert("The price is Rs.765000")
} 
else if (b=='i20') {
  alert("The price is Rs.800000")
} else if (b=='Elantra') {
  alert("The price is Rs.1786000")
} else if (b=='Camry') {
  alert("The price is Rs.4061000")
} else if (b=='Yaris') {
  alert("The price is Rs.916000")
} 
else {
  alert("The price is Rs.3036000")
}

}
        </script>
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
<h1><center>Customer order form:<center></h1>

<form name="MyForm" action="validationpp.php" method="POST" onsubmit="price()">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="John" required><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" placeholder="Doe" required ><br>
  <label for="mno">Mobile :</label><br>
  <input type="tel" id="mno" name="mobile" palceholder="0000000000" required ><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" placeholder="abc@example.com " required><br>
 
  <label for="school">Address:</label><br>
  <textarea id="school" name="address" placeholder="Type your address" required></textarea><br>
  
  <label >Company:</label><br>
  <select name="company" id="input" onchange="random_function()">
            <option value="" disabled selected>Select your option</option>
            <option value="Tata">Tata</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Toyota">Toyota</option>
            
        </select>
        <div>
           <label >Model:</label><br>
           <select  name="model" id="output" onchange="random_function1()">
           </select>
        </div>
        <br><br>
    <input type="submit" name="Sub" value="Submit">

</form> 

<p>If you click the "Submit" button, the form-data will be submitted.</p>

</body>
</html>
