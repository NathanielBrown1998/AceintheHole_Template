<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Events
-->

<!--
<?php

session_start();

if(isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in before viewing this page";
    header("location : login.php");
}

if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header("location : login.php");
}

?>
-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Ace in the Hole Multisports</title>
</head>

<body>

    <header>
        <nav>
            <img src="logo.png" alt="Ace in the Hole Multisport Logo" width="240" height="69">
            <h1>Ace in the Hole Multisport</h1>
            <div class="nav">
                <label class="menuIcon" for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle">
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact</a>
                    <a href="events.php">Events</a>
                    <a href="about.php">About Us</a>
                    <a href="register.php">Register</a>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="hidden">
            <img src="hero1.jpg" class="center" alt="Ace in the Hole Multisport Banner">
        </div>

        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="pure">PORTLAND WEATHER</a>
        <script>
            ! function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = 'https://weatherwidget.io/js/widget.min.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'weatherwidget-io-js');

        </script>

        <div id="content">
            <h2>About The Event</h2>
            <p>
                The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.
            </p>
            <p>
                There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!
            </p>

            <h3>Come Join Us!</h3>
            <p><a href="register.php">Register Now!</a> or <a href="contact.php">Contact Us</a> if you have any questions.</p>
        </div>

        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="slideshow1/img0.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="slideshow1/img1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="slideshow1/img2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="slideshow1/img3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="slideshow1/img4.jpg" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            // Next/previous controls
            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            // Thumbnail image controls
            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }

        </script>

        <div class="month">
            <ul>
                <li class="prev">&#10094;</li>
                <li class="next">&#10095;</li>
                <li>March<br><span style="font-size:18px">2021</span></li>
            </ul>
        </div>

        <ul class="weekdays">
            <li>Mo</li>
            <li>Tu</li>
            <li>We</li>
            <li>Th</li>
            <li>Fr</li>
            <li>Sa</li>
            <li>Su</li>
        </ul>

        <ul class="days">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li><span class="active">10</span></li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
        </ul>

        <!--
        <?php
        if(isset($_SESSION['success'])) : ?>

        <div class="error success">
            <h3>
                <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
            </h3>
        </div>
        <?php endif ?>

        //if the user logs in display page

        <?php if(isset($_SESSION['username'])) : ?>

        <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>

        <button><a href="index.php?logout='1'"> Log Out </a></button>
        <?php endif ?>
        -->

    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>

</html>
