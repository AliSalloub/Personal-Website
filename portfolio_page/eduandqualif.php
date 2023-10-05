<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale = 1.0">
    <title>Portfolio </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@700&family=Playfair+Display:ital@1&display=swap"
        rel="stylesheet">

</head>

<body class="educationexperience">
    <nav class="navbar">
        <ul>
            <li><a href="Portfolio.php">Home</a></li>
            <li><a href="about.php">About Me</a></li>
            <li><a href="skillsandexp.php">Skills</a></li>
            <li><a href="eduandqualif.php">Education and experience</a></li>
            <li><a href="portfolio1.php">Portfolio</a></li>
            <li><a href="viewBlog.php">Blog</a></li>
            <li><a href="contact.php">Contact Me</a></li>
            <?php if ($loggedIn): ?>
                <li><a href = "addEntry.php">Add Blog</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.html">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div id="container">
        <div class="row">
            <section class="eduandexp">

                <header class="title">
                    <h2>EDUCATION</h2>
                </header>
                <div class="contents">
                    <div class="box">
                        <h4> 2014 - 2019 </h4>
                        <h3> GCSE - Westminster Academy</h3>
                        <p>Achieved 9 GCSEs and 1 Btec with an 8 in mathematics and a 7 in English lit/lang </p>
                    </div>
                    <div class="box">
                        <h4> 2019 - 2021 </h4>
                        <h3> A Level - Holland Park School</h3>
                        <p>Achieved 3 A* in Mathematics,Economics and Psychology </p>
                    </div>
                    <div class="box">
                        <h4> 2022 - Present </h4>
                        <h3> Computer Science Bsc - Queen Mary University of London</h3>
                        <p>Will graduate with a minimum of a high 2:1 !!!</p>
                    </div>
                </div>
            </section>

            <section class="eduandexp">

                <header class="title">
                    <h2>Experience</h2>
                </header>
                <div class="contents">
                    <div class="box">
                        <h4>Java Course</h4>
                        <h3> Coursera</h3>
                        <p> Completed a course on the basics and intermediate aspects of the Java programming language
                        </p>
                    </div>
                    <div class="box">
                        <h4> Zero Gravity Mentor </h4>
                        <h3> Mentor</h3>
                        <p> Currently a mentor under the zero gravity banner helping year 12 and year 13 students get
                            their dream offers </p>
                    </div>
                    <div class="box">
                        <h4> Hackathons website </h4>
                        <h3> Hackathons </h3>
                        <p>Member of the Hackathons discord, participating in regular Hackathons gaining valuable
                            experience</p>
                    </div>
                </div>
            </section>
        </div>
    </div>