<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
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
                    
                    <img src="Images/resources1.png" alt="Therapy">
                    <p>
                        We believe that in times like these, a webiste that can provide access to the required materials will be a very important tool for the general populous. 
                        In times of Google and self-diagnosis, it will also provide a source of verifiable results and a means of communication with experts on the matter. 
                        This will lead to better treatment. This idea was motivated by the current scenario where many try to downplay the seriousness of their illness and treat themselves. 
                        In our society, where mental illness isn't even considered a “real” illness by many people, 
                        getting it treated will be another struggle entirely. 
                    </p>
                    <p>
                        The list of available experts, be it counselors or therapists or psychiatrists, is a sign of the confidence the medical community has put in the idea of better treatment of mental illness. 
                        Their support of the idea, and further integration of technology in the medical field everyday will be a major factor in the successful application of this website. 
    
                    <p>
                        With this in mind, we have collected some e-books for free circulation, that we 
                        believe would help.
                    </p>
                    <ul>
                        <li><a href="Resources/Being Mortal Illness, Medicine and What Matters in the End.pdf" target = "blank">Being Mortally Ill</a></li>
                        <li><a href="Resources/RH_StudyGuide_V2.pdf" target = "blank"> Resisting Happiness</a></li>
                        <li><a href="Resources/The Power of Self-Esteem.pdf" target = "blank">The Power of Self Self-Esteem</a></li> 
                    </ul>
                    
                </main>
            </article>

            <aside class="sidebar">
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