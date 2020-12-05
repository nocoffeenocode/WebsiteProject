<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Records</title>
    <link rel="stylesheet" href="css/style.css">
    <style> body{
        font-size:larger;

    }
    td
    {
    padding:2px 20px;
    }
    th
    {
    padding:0px 5px;
    }
    </style>
    
</head>
<body>
    <?php 
    session_start();
    if(!isset($_SESSION["userid"])){
             header("location: logout1.php");
            }
    ?>
    <?php
        $email=$_SESSION["userid"];
        $mysqli= new mysqli('localhost','root','','projecttest');
        $result= $mysqli->query("SELECT * FROM appointments WHERE email='$email'");
    ?>
    <div class="container-main">
        <header>
            <div class="logo">
                <a href="homepage.php">   <!--This is the logo-->   
                <img src="Images/Logo.png" height="100" width="250" alt="Malhar Logo">
                </a>
            </div>
            <div class="search">
                <form> <!--This is the searchbar-->   
                    <input type="search" name="search" placeholder="Search Content">
                    <input type="submit" name = "submit">
                </form>
            </div>
            <div class= "spacefix"></div> <!--The spacing to align the logo and search-->
            <div class = "topmenu">
                <ul> <!--This is the links for nav menu on top-->   
                    <li><a href="homepage.php">Home </a></li>
                    <li><a href="resources.php">Resources </a></li>
                    <li><a href="therapists.php">Therapists </a></li>
                    <li><a href="appointment.php">Appointments </a></li>
                    <li><a href="table.php">My Appointments</a></li>
                    <li><a href="about.php">About Us </a></li>
                    <li><a href="logout1.php">Logout </a></li>
   
                </ul>
            </div >
        </header>

        <section class="content-holder"><!--Content will be put here-->
            <!-- <article class="main-content"> -->
                <main>
                    


                    <table border = "5px" border-color = "darkcyan" width=900px bgcolor=#00cccc height=300px style="margin-left: 50px; margin-bottom: 20px; background-color: white">
                        <tr>  
                            <th cellspacing = "500" > Doctor Name  </th>
                            <th cellspacing = "50px"> Time   </th>
                            <th cellspacing = "50"> Date  </th>
                            <th cellspacing = "50"> Session Type </th>
                            <th colspan="2"> Action</th>
                            
                        </tr>   
                        
                        
                        <?php
                        while ($row=$result->fetch_assoc()): ?>
                            <tr>
                              <td><?php echo $row['doc']; ?></td>
                              <td><?php echo $row['time']; ?></td>
                              <td><?php echo $row['date']; ?></td>
                              <td><?php echo $row['type']; ?></td>
                              <td>
                                <a style="color: teal" href="appointmentupdate.php?edit=<?php echo $row['id']; ?>" >Edit</a>
                                </td><td>
                                <a style="color: teal" href="deleteappointment.php?delete=<?php echo $row['id'];?>">Delete</a>
                              </td>

                            </tr>

                        <?php endwhile; ?>

                        
                            
                        </table>
                        
                        
                </main>
            </article>

           <!--  <aside class="sidebar" style="padding-left:1010px">
                <div>
                    <h4> External Links </h4>
                    <ul>
                        <li><a href="https://www.statista.com/chart/15390/global-suicide-rates/" target = "blank">Suicide Deaths 2016 </a></li>
                        <li><a href="https://www.statista.com/statistics/236567/number-of-suicides-in-selected-countries-by-gender/" target = "blank">Suicide Deaths by Gender </a></li> 
                        <li><a href="https://www.who.int/mental_health/prevention/suicide/suicideprevent/en/" target = "blank">Suicide Deaths by Economic Class </a></li> 
                    </ul>
                </div>
            </aside> -->
            <div class= "spacefix"></div>

            <footer class="main-footer">
                <div class="footer-menu"><!--Menu Options from header-->
                    <h4> Footer </h4>
                    <ul> <!--This is the links for nav menu on top-->   
                        <li><a href="homepage.php">Home </a></li>
                        <li><a href="resources.php">Resources </a></li>
                        <li><a href="therapists.php">Therapists </a></li>
                        <li><a href="appointment.php">Appointments </a></li>
                        <li><a href="table.php">Appointment Records </a></li>
                    </ul>
                </div>
                <div class="contact"><!--Contact Info-->
                    <address class="contact-address">
                        <h4>Contact us at: </h4>
                        <p>Email: <a href="mailto:email@site.com">email@site.com</a></p>
                        <p>Phone: <a href="tel:1231231231">1231231231</a></p>
                        <p>Email: <a href="mailto:email@site.com">email@site.com</a></p>
                        <p>Phone: <a href="tel:1231231231">9876543210</a></p>
                    </address>
                </div>
                <div class= "spacefix"></div>
                <div><!--copyright (cause it looks cool)-->
                    <p>
                        <small>Copyright &copy; All Rights Reserved</small>
                    </p>
                </div>
            </footer>
        </section>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
</body>
</html>