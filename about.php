<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
                    <li><a href="logout.php">Logout </a></li>

                </ul>
            </div >
        </header>

        <section class="content-holder"><!--Content will be put here-->
            <article class="main-content">
                <main>
                    <h1>About Us</h1>

                    <p>
                        We believe that in times like these, a website that can provide access to the required materials 
                        will be a very important tool for the general populous. In times of Google and self-diagnosis, 
                        it will also provide a source of verifiable results and a means of communication with experts on the matter. 
                        This will lead to better treatment. This idea was motivated by the current scenario where many try to downplay the 
                        seriousness of their illness and treat themselves. In our society, where mental illness isn't even considered 
                        a “real” illness by many people, getting it treated will be another struggle entirely. 
                        </p>
                    <p>
                        We chose this topic for our project as we wanted to do something that would show our
                        drive for providing better medical aid to people in all sections of society. 
                        The choice of topic was also motivated by the fact that we wished to do something unique, and socially useful.
                        Taking a stand to fight the discrimination and barriers that prevent people from getting mental aid is something 
                        that we beleive in deeply.  
                    </p>
                    <p>
                        <h5 >Introducing our Team:</h5>
                        <table border = "0px">
                            <tr>
                                <th cellspacing = "20">user1</th>
                                <th cellspacing = "20">user2</th>
                            </tr>
                            
                            
                            <tr>
                                <td cellspacing = "20"> <img src="Images/user1.jpeg" style="width:300px;height:200px;" title=" user1"> </td>
                                <td cellspacing = "20"> <img src="Images/user2.png" style="width:300px;height:200px;" title="user2"> </td>
                            </tr>
                            <tr align="center">
                                <td cellspacing = "20" >email@site.com</td>
                                <td cellspacing = "20">email@site.com</td>
                            </tr>
                        </table>

                    </p>
                    
                </main>
            </article>

            <aside class="sidebar"><!--Sidebar-->
                <div>
                    <h4 id="a"> External Links </h4>
                    <ul id="a">
                        <li><a href="https://www.statista.com/chart/15390/global-suicide-rates/" target = "blank">Suicide Deaths 2016 </a></li>
                        <li><a href="https://www.statista.com/statistics/236567/number-of-suicides-in-selected-countries-by-gender/" target = "blank">Suicide Deaths by Gender </a></li> 
                        <li><a href="https://www.who.int/mental_health/prevention/suicide/suicideprevent/en/" target = "blank">Suicide Deaths by Economic Class </a></li> 
                    </ul>
                </div>
            </aside>
            <div class= "spacefix"></div>

            <footer class="main-footer">
                <div class="footer-menu"><!--Menu Options from header-->
                    
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
                        <p>Phone: <a href="tel:1231231231">3213213213</a></p>
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