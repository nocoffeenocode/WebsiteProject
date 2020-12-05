<?php
session_start();
$emailid=$_POST['email'];
$password=$_POST['pass'];
$conn=mysqli_connect('localhost','root','',"projecttest");

$result= mysqli_query($conn, "SELECT * from usersdb WHERE emailid='$emailid' and password='$password'") or die("Failed to query db".mysql_error());
$row=mysqli_fetch_array($result);

if ($row['emailid']==$emailid && $row['password']== $password) {
  $_SESSION["userid"]=$row['emailid'];
  {header("location:homepage.php");}
} 
else {
  {header("location:index.php?msg=Invalid login credentials");}
}




?>