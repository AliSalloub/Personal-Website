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

<body class="aboutmepage">
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

    <section id="about">
        <h1 class="headings">ABOUT ME</h1>
        <div id="pic">
            <img src="me.jpg" alt="A young aspiring cyber security specialist">
            <div id="intro">
                <h2> Ali Salloub</h2>
                <p><b>Computer Science student studying at Queen Mary University of London.</b> </p>
                <br>
                <p> My professional aim at the moment is leaning heavilty towards cyber security as it is a real
                    interest of mine
                    . However, there is also passion within me about the artificial intelligence field due to how fast
                    growing it is.
                    In order to achieve my goals, I plan to complete my Bsc degree in Computer Science and select
                    modules that align with my career
                    goals. Also in my work placement year, I will try my best to get a position at a firm that is
                    directly involved in the fields I am interested in.
                </p>
            </div>
        </div>
    </section>