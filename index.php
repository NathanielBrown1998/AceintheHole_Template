<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Home
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

    <div id="hidden">
        <img src="hero.jpg" class="center" alt="Ace in the Hole Multisport Banner">
    </div>

    <main>

        <div id="content">
            <h2>What We Do</h2>
            <p>
                Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body. Visit our <a href="about.php">About Us</a> page for more information.
            </p>

            <h3>FAQs</h3>
            <p>
                What are the Rules? We currently adhere to the USAT Rules for Triathlon & Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.

                Can I use a personal music device while cycling? Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.

                Can I use a personal music device while running? During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.
            </p>

            <ul>
                <li>
                    If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice - music or awards/points/rankings.
                </li>
                <br>
                <li>
                    If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.
                </li>
                <br>
                <li>
                    We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.
                </li>
            </ul>
            <br>
            <h2>Registration</h2>
            <p>Long Course: $240</p>
            <p>Olympic: $110</p>
            <p>10K: $50</p>
            <p>Half Marathon: $75</p>
            <p>Sprint: $90</p>
            <p>Try-a-Tri: $65</p>
            <br>
            <h5>Cost Includes:</h5>
            <p>Food & Beer</p>
            <p>Access to the weekend's live entertainment & Fitness Expo</p>
            <p>Commemorative Finisher medal</li>
                <p>Accurate Chip Timing for competitive races</p>
                <p>Ace in the Hole Multisport Weekend Tech Shirt</p>
                <p>Post-event party & entertainment</p>
                <p><a href="register.php">Register Here!</a></p>

        </div>

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
