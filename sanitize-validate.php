<?php 
// Sanitization and Validation in PHP
// Sanitization is the process of cleaning input data to prevent security issues like XSS (Cross-Site Scripting) attacks.
// Validation is the process of checking if the input data meets certain criteria (e.g., not empty, valid format).
$username = "";
$message = "";
if(isset($_POST["login"])){
    $username = $_POST["username"];
    
    // Sanitize input
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    //INPUT_POST (or input_get, if u used that)  IS A SUPER GLOBAL VARIABLE, WHICH IS USED TO COLLECT FORM DATA AFTER SUBMITTING AN HTML FORM WITH METHOD="post".
    // FILTER_SANITIZE_SPECIAL_CHARS removes special characters from the input, preventing XSS attacks.
    // It converts special characters to HTML entities, which is useful for preventing cross-site scripting (XSS) attacks.
    // For example, <script> will be converted to &lt;script&gt;.
    //for integers--FILTER_SANITIZE_NUMBER_INT removes all characters except digits, plus and minus sign.
    //for emails--- FILTER_SANITIZE_EMAIL removes all illegal characters from an email address.
    


    // Validate input -if doesnt pass validation test--returns empty string 
    // Validate input
    if (empty($username)) {
        $message = "Username is required.";
    } else {
        $message = "Username is: " . $username;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize-validate.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="login"><br>

    </form>
    <?php 
    if (!empty($message)) {
        echo $message . "<br>";
    }   
    ?> 
 </body>
</html>

