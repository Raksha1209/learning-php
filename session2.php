<?php
session_start(); // Resume the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session2 Page</title>
</head>
<body>
    <p>This is the home page.</p>
    <a href="session.php">Back to Session Page</a><br><br>

    <?php
    if (isset($_SESSION["username"]) && isset($_SESSION["password"])) {
        echo "Username: " . $_SESSION["username"] . "<br>";
        echo "Password: " . $_SESSION["password"] . "<br>";
    } else {
        echo "No session data found. Please login first.<br>";
    }
    ?>
</body>
</html>
