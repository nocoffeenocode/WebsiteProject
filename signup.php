<?php


  $name=$_POST['name'];
  $emailid=$_POST['useremail'];
  $password=$_POST['userpass'];
  $pnumber=$_POST['pnumber'];
  
  // Database connection
    $conn = mysqli_connect('localhost','root','','projecttest');
    if($conn->connect_error){
      echo "$conn->connect_error";
      die("Connection Failed : ". $conn->connect_error);
    } 
    
    else {

      $result= mysqli_query($conn, "SELECT * from usersdb WHERE emailid='$emailid'") or die("Failed to query db".mysql_error());
      
      if (mysqli_num_rows($result) > 0)
      
      {
        
        header("location:index.php?msgsign=Email already exists in the database");
    }


      
      else{

        $stmt = $conn->prepare("insert into usersdb(name, emailid, password, pnumber) values(?, ?, ?, ?)");
        $stmt->bind_param("sssi", $name, $emailid, $password, $pnumber);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
        {
          header("location:index.php");
        }
    }
  
}


/*require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

      $username = $_POST['user-name'];
      $email = $_POST['user-email'];
      $password = $_POST['user-pass'];

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try {
      $SQLInsert = "INSERT INTO users (username, password, email, to_date)
                   VALUES (:username, :password, :email, now())";

      $statement = $conn->prepare($SQLInsert);
      $statement->execute(array(':username' => $username, ':password' => $hashed_password, ':email' => $email));

      if($statement->rowCount() == 1) {
        header('location: index.html');
      }
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

}*/

?>
