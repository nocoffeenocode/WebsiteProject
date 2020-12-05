<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
    <link rel="stylesheet" href="css/style.css">
    <style> body{
        font-size:larger 
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
    <div class="container-main">
        <header>
            <div class="logo">
                <a href="homepage.html">   <!--This is the logo-->   
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
                    <li><a href="logout1.php">Logout</a></li>
                </ul>
            </div >
            
        </header>

        <section class="content-holder"><!--Content will be put here-->
            <article class="main-content">
                <main>
                    <pr>Please Enter your Appointment Details:</pr>
                        <br>
                        <pr style="font-size: small;">Note: These appointments will have to be confirmed from the Doctor's End depending on their availabilty.
                        </pr>

                        <br>
                        <br>
                        
                        
                        <form name="appointmentform" action="appointmentprocess.php" onsubmit="return validate()" method="post">
                        
                        <label for="doctor">Doctor name:</label><br>
                        <input type="text" name="doctor" required>
                        
                        <br>
                        <br>
                        
                        <label for="time">Select Time Slot: </label> <br>
                        <input type="time" name="time" required> <br><br>
                        <label for="date">Select Date: </label> <br>
                        <input type="date" name="date" required>
                        
                        
                        
                        <br>
                        <br>
                        
                        <input type="checkbox" id="stu" >I am a Student<br>
                        <input type="checkbox" id="city">I live in Mumbai
                        
                        <br>
                        <br>
                        
                        <label for="session">Session Type</label> <br>
                        <select id="session" name="session">
                          <option value="online">Online</option>
                          <option value="text">Text Based</option>
                          <option value="phone">Phone Call</option>
                          <option value="physical">In Person</option>
                        </select>
                        
                        <br>
                        <br>
                        <div style="text-align: center">
                        <input type="submit" style="margin: auto;
                                padding: 10px 25px;
                                background-color: darkcyan;
                                color: #fff;
                                border: none;
                                font-size: 20px;
                                border-radius: 10px;
                                box-shadow: 10px 10px 20px #a8a8a8;
                                transition: box-shadow 0.5s;
                                outline: none;
                                text-align: center;
                                 " >
                        </div>
                        </form>
                        

                </main>
            </article>
            <script type="text/javascript">
            function validate() {
                var choice1=document.getElementById("stu").checked;
                var choice2=document.getElementById("city").checked;

                if(choice1=="")
                {
                    alert("Only available for Students");
                    return false;
                }
                else if(choice2=="")
                {
                    alert("Only for students in Mumbai");
                    return false;
                }
                return true;
            }

            
            
    </script>
            
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