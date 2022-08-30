<?php

$database_name="booking";
$con = mysqli_connect("localhost","root","root",$database_name);

if(!$con){
  echo 'Not connected to server';
}

$fname = $_POST['Name'];
$lname = $_POST['Last'];
$email = $_POST['Email'];
$trip = $_POST['rad'];
$comment = $_POST['Comment'];
$animal = $_POST['Subject'];

$sql= "INSERT INTO book (fname,lname,email,trip,comment,animal) VALUES ('$fname','$lname','$email','$trip','$comment','$animal')";

if(!mysqli_query($con,$sql))
{
  echo 'Not Interested';
}else {
  echo 'Inserted';
  }

header ("refresh:2; url=contact.html");
?>
