<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Registration & Login
-->

<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <header>
        <nav>
            <img src="logo.png" alt="Ace in the Hole Multisport Logo" width="240" height="69">
            <h1>Ace in the Hole Multisport</h1>
            <div class="nav">
                <label for="toggle">&#9776;</label>
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

    <main id="contact-style">
        <div class="container">



            <div class="header">
                <h2>Register</h2>
            </div>
            <form action="register.php" method="post">

                <?php include('errors.php') ?>
                <!--
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" required>
                </div>
                -->
                <div class="formstyle">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" required>
                </div>
                <!--
                <div>
                    <label for="password">Password: </label>
                    <input type="password" name="password_1" required>
                </div>

                <div>
                    <label for="password">Confirm Password: </label>
                    <input type="password" name="password_2" required>
                </div>
                -->
                <!-- New stuff -->

                <div class="formstyle">
                    <label for="fullname">Full Name: </label>
                    <input type="text" name="fullname" required>
                </div>

                <div class="formstyle">
                    <label for="age">Age: </label>
                    <input type="text" name="age" required>
                </div>

                <div class="formstyle">
                    <label for="athlete">Lifstyle: </label>
                    <select id="athlete" name="athlete" required>
                        <option value="athlete">Athlete</option>
                        <option value="volunteer">Volunteer</option>
                    </select>
                </div>

                <div class="formstyle">
                    <label for="phone">Phone #: </label>
                    <input type="text" name="phone" required>
                </div>

                <div class="formstyle">
                    <label for="emergencyname">Emergency Contact Name: </label>
                    <input type="text" name="emergencyname" required>
                </div>

                <div class="formstyle">
                    <label for="emergencyphone">Emergency Contact Phone #: </label>
                    <input type="text" name="emergencyphone" required>
                </div>

                <div class="formstyle">
                    <label for="gender">Gender: </label>
                    <select id="gender" name="gender" required>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="non-binary/other">None-binary/Other</option>
                    </select>
                </div>

                <div class="formstyle">
                    <label for="size">T-Shirt Size: </label>
                    <select id="size" name="size" required>
                        <option value="small">S</option>
                        <option value="medium">M</option>
                        <option value="large">L</option>
                        <option value="x-large">XL</option>
                        <option value="2x-large">2XL</option>
                    </select>
                </div>

                <div class="formstyle">
                    <label for="saturday">Saturday Times: </label>
                    <select id="saturday" name="saturday" required>
                        <option value="longtriathlon">Long Course Triathlon (7:00a.m.)</option>
                        <option value="olympictriathlon">Olympic Triathlon (7:30p.m.)</option>
                        <option value="10k">10K (7:15a.m.)</option>
                        <option value="halfmarathon">Half Marathon (7:15a.m.)</option>
                    </select>
                </div>

                <div class="formstyle">
                    <label for="sunday">Sunday Times: </label>
                    <select id="sunday" name="sunday" required>
                        <option value="sprinttriathlon">Sprint Triathlon (8:00a.m)</option>
                        <option value="tryatri">Try-a-Tri (8:20a.m.)</option>
                        <option value="splashndash">Splash n Dash (12:00p.m.)</option>
                    </select>
                </div>

                <label for="accomodations">Special Accomodations: </label>
                <br>
                <textarea id="accomodations" name="accomodations" class="form-control" placeholder="Include Special Accommodations Here..." rows="10" cols="60" required></textarea>
                <br>
                <!-- End New stuff -->

                <button type="submit" name="reg_user"> Submit </button>

                <p>Have a question? <a href="login.php">Contact</a></p>

            </form>

        </div>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
