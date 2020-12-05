<?php
session_start();
$conn = mysqli_connect('localhost','root','','projecttest');

$id=$_GET['edit'];
$update=true;
$result=$conn->query("SELECT * FROM appointments WHERE id='$id'");
  if(mysqli_num_rows($result)==1){
    $row=$result->fetch_array();
    $name=$row['doc'];
    $date=$row['date'];
    $time=$row['time'];
    $type=$row['type'];
}
header("location:appointmentupdate.php")
?>