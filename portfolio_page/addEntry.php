<?php
session_start();

$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@700&family=Playfair+Display:ital@1&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body class = "aboutwebsite">
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

    <div class="blog-form-container">
        <h1 class = "Blogheader">Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h1>
        <h1 class="Blogheader ">Create a New Blog Entry:</h1>
        <form class="blog-form" action="addPost.php" method="post" id="blog-form">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" required></textarea>
            <div class="blog-form-buttons">
        <button type="submit" class="submit-button">Post</button>
        <button type="button" id="clearButton">Clear</button>
            </div>
        </form>
    </div>
    <script src="addPost.js"></script>

</body>

</html>
