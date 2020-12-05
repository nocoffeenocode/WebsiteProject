<?php

session_start();
$conn = mysqli_connect('localhost','root','','projecttest');
$id=$_GET['delete'];

mysqli_query($conn, "DELETE FROM appointments WHERE id='$id'");
header("location: table.php");


?>