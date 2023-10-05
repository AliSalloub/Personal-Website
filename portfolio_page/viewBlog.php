<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}

$conn = new mysqli('localhost', 'root', '', 'portfolio_page');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title, content, created_at FROM blog_posts";
$result = $conn->query($sql);

$posts = [];
while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

for ($i = 0; $i < count($posts) - 1; $i++) {
    for ($j = 0; $j < count($posts) - $i - 1; $j++) {
        if (strtotime($posts[$j]['created_at']) < strtotime($posts[$j + 1]['created_at'])) {
            $temp = $posts[$j];
            $posts[$j] = $posts[$j + 1];
            $posts[$j + 1] = $temp;
        }
    }
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

    <div class="blog-container">
        <h1 class="Blogheader ">Blog Posts</h1>
        
        <div class="previous-entries">
    <h2>Previous Entries</h2>
    <?php
    if (count($posts) > 0) {
        foreach ($posts as $post) {
            $title = $post['title'];
            $content = $post['content'];
            $createdAt = $post['created_at'];
            $formattedDate = date("d F, Y, H:i", strtotime($createdAt));
    ?>
            <div class="previous-entry">
                <h3><?php echo htmlspecialchars($title); ?></h3>
                <p class="entry-time"><?php echo $formattedDate; ?></p>
                <article>
                    <?php echo nl2br(htmlspecialchars($content)); ?>
                </article>
            </div>
    <?php
        }
    } else {
        echo "No blog posts found.";
    }
    ?>              

    </div>
</body>

</html>
<?php
$conn->close();
?>