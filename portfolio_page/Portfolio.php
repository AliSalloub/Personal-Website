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
        href="https://fonts.googleapis.com/css2?family=Aldrich&family=Edu+NSW+ACT+Foundation:wght@700&family=Playfair+Display:ital@1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body>
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

    <section id="home">
        <div class="main">
            <h1 class="headings"><br>ALI SALLOUB</h1>
        </div>
    </section>
    <footer>
        <div class="social-media-icons">
            <a href="https://www.facebook.com/yourusername" target="_blank" class="facebook"><i
                    class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/yourusername" target="_blank" class="twitter"><i
                    class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/yourusername" target="_blank" class="linkedin"><i
                    class="fab fa-linkedin-in"></i></a>
            <a href="https://www.instagram.com/yourusername" target="_blank" class="insta"><i
                    class="fab fa-instagram"></i></a>
        </div>
    </footer>

</body>

</html>
