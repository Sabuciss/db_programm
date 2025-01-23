<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'userss';
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['USER'];
    $password = $_POST['PASSWORD'];
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);

    $sql = "SELECT * FROM userss WHERE USER = '$username'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['PASSWORD']) {
            echo "Login successful! Welcome, " . $row['USER'];
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }
}

$mysqli->close();
?>
