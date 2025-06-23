<?php
    include("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($SERVER["PHP_SELF"]) ?>"  method="post">
        <h2>REGISTER YOURSELF ASAP</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br><br>    
        <input type="submit" name="submit" value="Register">
        <br><br>
    </form>
</body>
</html>

<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        // Validate input
        if(empty($username) || empty($password)) {
            echo "Username and password cannot be empty.";
        } else {
            // Prepare SQL statement to prevent SQL injection
            $hash=password_hash($password, PASSWORD_DEFAULT); // Hash the password

            $password = $hash; // Use the hashed password for insertion

            $sql="INSERT into users (username, password, email) VALUES ('testuser', $password, 'bob@123gmail.com')";

            mysqli_query($conn, $sql);

            echo "Registration successful!";
            }
            
        

    }
    mysqli_close($conn);
?>