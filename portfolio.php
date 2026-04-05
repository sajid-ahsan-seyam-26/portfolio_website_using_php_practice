<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Portfolio Page</h2>
    <p>This is my simple portfolio page.</p>

    <div class="portfolio-box">
        <h3>My Skills</h3>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>MySQL</li>
        </ul>
    </div>

    <div class="menu">
        <a href="home.php">Back to Home</a>
        <a href="join.php">Join Page</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>