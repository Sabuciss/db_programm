<?php
session_start(); // Start the session

// Check if the user is logged in (session variable set)
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to index.php (registration page)
    header('Location: index.php');
    exit(); // Make sure no further code is executed after the redirect
}

// Get the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
</body>
</html>
