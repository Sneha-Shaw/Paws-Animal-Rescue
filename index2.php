<?php

session_start();

include("connection.php");
include("config.php");
include("functions.php");

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>Paws</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="icon" href="assets/favicon.png">
    </head>
    <nav>
        <a href="index.html">Home</a></div>
        <a href="rescue.html" class="rescuebtn">Rescue</a>
        <a href="#about">Our Team</a>
        <a href="#contact">Contact Us</a>
        <a href="logout.php">Logout</a>
        <img class="logo" src="assets/logo.png" style="float: right;">

    </nav>

    <script src="assets/index.js" async defer></script>

    <div id="home">
        <div class="welcome">
            <div class="font">
                <font>Are You Running Out Of Time?</font><br>
                <br>
                <font>We help you reach multiple Rescue Centers at once!</font>
            </div>
            <span class="rescuebtn"><a href="rescue.html"></a></span>
        </div>
        <br>
        <br>
        <br>
        <br>
       
        <div id="about">
            <div class="heading1">
                <font size="40" face="Source Code Variable" style="font-weight: 800;"><span class="line"></span> Meet
                    The Team</font>
            </div>
             <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="arrow up"></i></button>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="assets/vishal.jpg" alt="vishal" style="width:80%">
                        <div class="container">
                            <h2 style="color: white;">Vishal Kumar Shaw</h2>
                            <br>
                            <p>shawv438@gmail.com</p>
                            <br>
                            <div class="social">
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="assets/dp.jpg" alt="Sneha" style="width:80%">
                        <div class="container">
                            <h2 style="color: white;">Sneha Shaw</h2>
                            <br>
                            <p>snehashaw122@gmail.com</p>
                            <br>
                            <div class="social">
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="assets/masud.jpg" alt="John" style="width:80%">
                        <div class="container">
                            <h2 style="color: white;">Masud Gazi</h2>
                            <br>
                            <p>masudgazi.162676@gmail.com</p>
                            <br>
                            <div class="social">
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="assets/dp.jpg" alt="Avinaba" style="width:80%">
                        <div class="container">
                            <h2 style="color: white;">Avinaba Bera</h2>
                            <br>
                            <p>avimax37@gmail.com</p>
                            <br>
                            <div class="social">
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="assets/dp.jpg" alt="Deepsagar" style="width:80%;">
                        <div class="container">
                            <h2 style="color: white;">Deepsagar Boral</h2>
                            <br>
                            <p>deepsagarboral@gmail.com</p>
                            <br>
                            <div class="social">
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <img src="assets/gurjot.jpg" alt="Masud" style="width:80%">
                        <div class="container">
                            <h2 style="color: white;">Gurjot Singh</h2>
                            <br>
                            <p>gurjots2811@gmail.com</p>
                            <br>
                            <div class="social">
                                <a href="#" class="fa fa-linkedin"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-twitter"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="heading">
                    <font size="40"><span class="line"></span>Contact</font>
                </div>
                <div class="container">


                    <form class="conform" action="">
                        <label for="name">Your Name</label>
                        <br>
                        <input type="text" id="name" name="name" placeholder="  Your name"
                            style="width: 400px; height: 60px;" required>

                        <br>
                        <label for="email">Email address</label>
                        <br>
                        <input type="Email" id="email" name="Email" placeholder="  Your email"
                            style="width: 400px; height: 60px;" required>

                        <br>
                        <label for="subject">Message</label>
                        <br>
                        <textarea id="subject" name="subject" placeholder="  Message"
                            style="height:180px; width: 400px; resize: none;" required></textarea>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="Send Message">
                    </form>

                </div>
            </div>


            <div class="footer">

                <footer>
                    <ul class="list-inline">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <p class="copyright">Copyright <strong>Paws</strong> © 2021. All rights reserved</p>
                </footer>
            </div>
        </div>

</html>
