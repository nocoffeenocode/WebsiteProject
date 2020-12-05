<?php

session_start();


$conn = mysqli_connect('localhost','root','','projecttest');
$name='';
$date='';
$time='';
$type='';
$update=false;
$id=0;


  $name=$_POST['doctor'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $type=$_POST['session'];
  $email=$_SESSION["userid"];

  $stmt = $conn->prepare("insert into appointments(doc, date, time, type,email) values(?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $name, $date, $time, $type, $email);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
        {
          header("location:homepage.php");
        }
  
  // $mysqli->query("INSERT INTO appointments (doc,date,time,type) VALUES('$name','$date','$time','$type')") or die($mysqli->error);
  // header("location: homepage.php");


?>