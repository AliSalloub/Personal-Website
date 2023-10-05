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

<body class="skillswebsite">
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

    <section id="skillset">
        <div class="skills">
            <h1> My Skills</h1>
            <div class="skillscontainer">
                <p>HTML</p>
                <div class="bar">
                    <div class="html skill">80%</div>
                </div>
                <p>CSS</p>
                <div class="bar">
                    <div class="css skill">70%</div>
                </div>
                <p>Java</p>
                <div class="bar">
                    <div class="java skill">75%</div>
                </div>
                <p>Python</p>
                <div class="bar">
                    <div class="python skill">50%</div>
                </div>
                <p>Data Analytics</p>
                <div class="bar">
                    <div class="data skill">90%</div>
                </div>
            </div>
        </div>
    </section>