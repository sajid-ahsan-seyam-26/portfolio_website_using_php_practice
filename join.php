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
    <title>Join Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Join Page</h2>
    <p>This is the join page.</p>
    <p>Here you can add a join form later.</p>

    <div class="menu">
        <a href="home.php">Back to Home</a>
        <a href="portfolio.php">Portfolio Page</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>