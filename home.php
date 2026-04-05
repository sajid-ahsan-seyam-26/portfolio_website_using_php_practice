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
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>You have successfully logged in.</p>

    <div class="menu">
        <a href="join.php">Go to Join Page</a>
        <a href="portfolio.php">Go to Portfolio Page</a>
        <a href="logout.php">Logout</a>
    </div>
</div>

</body>
</html>