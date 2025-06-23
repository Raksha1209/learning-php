<?php 
session_start(); // Always at the top before any HTML

// Logout Logic (should be handled first)
if (isset($_POST["logout"])) {
    session_unset(); // Clear all session variables
    session_destroy(); // End session
    echo "You have logged out successfully<br>";
} else {
    // Set session variables only if they are not already set
    if (!isset($_SESSION["username"])) {
        $_SESSION["username"] = "raksha";
        $_SESSION["password"] = "test123";
    }

    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Password: " . $_SESSION["password"] . "<br>";

    echo "Session variables are set<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session Page</title>
</head>
<body>
    <p>This is the login/session page.</p>
    <a href="session2.php">Go to Session2 Page</a><br><br>

    <!-- Logout form -->
    <form action="session.php" method="post">
        <input type="submit" name="logout" value="LOG OUT">
    </form>
</body>
</html>
