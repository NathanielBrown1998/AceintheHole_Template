<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: About Us
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

        <div id="content">
            <h2>What We Do?</h2>
            <p>
                Ace in the Hole Multisport Events is a company that runs a two-day multisport event that has triathlons and running events of varying distances. Both athletes (participants) and volunteers can sign up for events.
            </p>
            <p>
                Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every Body.
            </p>
            <p>
                <a href="register.php">Register Now!</a>
            </p>
            <h2>Packet Pick Up</h2>
            <p>
                All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
            </p>
            <br>
            <h5>Course Details</h5>
            <p>
                WATER TEMPERATURE is expected to be between 62 & 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.
            </p>
            <br>
            <h5>Long Course SWIM</h5>
            <p>
                1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
            </p>
            <br>
            <h5>Long Course BIKE</h5>
            <p>
                58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.
            </p>
            <br>
            <h5>Long Course RUN</h5>
            <p>
                13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).
            </p>
            <br>
            <h5>OLYMPIC SWIM</h5>
            <p>
                1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.
            </p>
            <br>
            <h5>OLYMPIC BIKE</h5>
            <p>
                28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.
            </p>
            <br>
            <h5>OLYMPIC RUN</h5>
            <p>
                10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).
            </p>
            <br>
            <h5>Sprint:</h5>
            <p>
                Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.
            </p>
            <br>
            <h5>Try-A-Tri:</h5>
            <p>
                This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).
            </p>
            <br>
            <h5>Half Marathon COURSE:</h5>
            <p>
                Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified
            </p>
            <br>
            <h5>10k COURSE:</h5>
            <p>
                The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.
            </p>
            <br>
            <h5>Splash n' Dash:</h5>
            <p>
                Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.
            </p>
            <br>
            <br>
            <h2>What to Bring</h2>
            <p>
                Watch the weather closely. The show goes on no matter what the weather is doing.
            </p>
            <p>
                You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.
            </p>
            <br>
            <h5>Swim:</h5>
            <p>
                Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.
            </p>
            <br>
            <h5>Bike:</h5>
            <p>
                A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.
            </p>
            <br>
            <h5>Run:</h5>
            <p>
                You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.
            </p>
            <p>
                Remember to bring a change of clothing so you can enjoy the post-event festivities.
            </p>
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
