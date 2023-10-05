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

<body class="aboutwebsite">
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
    <header class="header">
        <h1 class="header-title">Portfolio</h1>
    </header>

    <div class="grid-container">
        <div class="grid-item">
            <img src="tictac.jpg" alt="Project 1">
            <h2 class="grid-item-title">Tic tac Toe</h2>
            <p class="grid-item-description">Developed a game of tic tac toe to play.</p>
        </div>
        <div class="grid-item">
            <img src="rsvp.jpg" alt="Project 2">
            <h2 class="grid-item-title">RSVP form</h2>
            <p class="grid-item-description">Developed a basic rsvp form.</p>
        </div>
    </div>
</body>

</html>