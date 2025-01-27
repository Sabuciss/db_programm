<?php
include('connect.php');

// Check if the form is submitted (POST request)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the input data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query to insert the user data
    $stmt = $mysqli->prepare("INSERT INTO userss (USER, PASSWORD) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        // Start the session and store the username
        session_start();
        $_SESSION['username'] = $username;

        // Redirect to sveiki.php after successful registration
        header("Location: sveiki.php");
        exit();  // Make sure the script stops here and doesn't run the rest of the code
    } else {
        // Show error message if insertion fails
        echo "<p>Error: " . $stmt->error . "</p>";
    }

    $stmt->close();
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="index.php" method="POST">
        
       <label for="username">Username</label>
        <input type="text" name="username" id="username" required autocomplete="username"><br><br> <!-- Added autocomplete="username" -->

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required autocomplete="current-password"><br><br> <!-- Added autocomplete="current-password" -->

        <button type="submit">Register</button>
    </form>
</body>
</html>
