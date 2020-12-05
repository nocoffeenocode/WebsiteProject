<?php

session_start();
$conn = mysqli_connect('localhost','root','','projecttest');

  $id=$_POST['id'];
  $name=$_POST['doctor'];
  
  $date=$_POST['date'];
  $time=$_POST['time'];
  $type=$_POST['session'];
  $conn->query("UPDATE appointments SET doc='$name', date='$date', time='$time', type='$type' WHERE id='$id'");
  header("location: table.php");


?>