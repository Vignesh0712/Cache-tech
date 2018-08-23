<?php

if(isset($_POST['subscribe'])){
$con = mysqli_connect("localhost","root","","maildata");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$subscribe = $_POST['emailaddress'];

$sql = "insert into maildata2(`email`) values('$subscribe')";
if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

$to_email = $subscribe;
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';


mail($to_email,$subject,$message,$headers);
}
?>