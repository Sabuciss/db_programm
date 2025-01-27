<form action="connection.php" method="POST">
    <div class="container">
        <h1>Login</h1>
        <hr>

        <?php
        if (isset($_GET['error'])) {
            echo "<p style='color:red;'>" . htmlspecialchars($_GET['error']) . "</p>";
        }
        ?>

        <label for="USER"><b>Lietotājvārds</b></label>
        <input type="text" placeholder="Enter Username" name="USER" id="USER" required>
        <br><br>

        <label for="PASSWORD"><b>Parole</b></label>
        <input type="password" placeholder="Enter Password" name="PASSWORD" id="PASSWORD" required>

        <hr>

        <button type="submit" class="Login">Login</button>
    </div>

    <div class="container signin">
        <p>Don't have an account? <a href="sveiki.php">Register</a>.</p>
    </div>
</form>
