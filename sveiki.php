<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="lv">
<head>
  <title>Welcome</title>
</head>
<body>
  <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
</body>
</html>
