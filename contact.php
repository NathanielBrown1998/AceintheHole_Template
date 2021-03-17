<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Contact
-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>

<body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="kULDJ4MW"></script>

    <header>
        <nav>
            <img src=" logo.png" alt="Ace in the Hole Multisport Logo" width="240" height="69">
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

    <div class="contact-title">
        <h2>Hello</h2>
        <h3>We're always ready to help</h3>
    </div>

    <main id="contact-style">

        <div class="contact-form">
            <form id="contact-form" method="post" action="contact-form.php">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                <br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                <br>

                <textarea name="message" class="form-control message" placeholder="Message" row="4" cols="10" required></textarea>
                <br>

                <select id="athlete" name="athlete">
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="interested">Interested Party</option>
                </select>
                <br>
                <input type="submit" class="form-control submit" value="SEND MESSAGE">
            </form>
        </div>

    </main>

    <div id="feed">
        <a class="twitter-timeline" data-width="300" data-height="500" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <div class="fb-page" data-href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" data-tabs="timeline" data-width="300" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/">Cas222Aceinthehole</a></blockquote>
        </div>
    </div>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>

</html>
