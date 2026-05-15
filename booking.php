<?php

$con=mysqli_connect('localhost','root','','travel');

if(isset($_POST['submit']))
{

$firstname=$_POST['ffirst'];
$lastname=$_POST['flast'];
$email=$_POST['femail'];
$city=$_POST['city'];
$phone=$_POST['fphone'];

$sql="INSERT INTO booking(id,ffirst,flast,femail,city,fphone)
VALUES
(0,'$firstname','$lastname','$email','$city','$phone')";

$result=mysqli_query($con,$sql);

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Booking Success</title>

<link rel="stylesheet" type="text/css" href="css/success.css">

</head>

<body>

<div class="success-box">

<h1>Booked Successfully</h1>

<p>Your Tour Booking Has Been Confirmed</p>

<a href="mainPage.html">
    Go To Home
</a>

</div>

</body>
</html>