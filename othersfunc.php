<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="othersfunc.php" method="post">
        <label>Enter a username</label>
        <input type="text" name="username"><br>
        <label>Enter a password</label>

        <input type="password" name="password"><br>
        <input type="submit" name="login" value="LOG IN"><br><br>
</body>
</html><?php
    // isset()---a function to check if a variable is set and not null
    //empty()---a function to check if a variable is empty, rturn 1=if exists, else nothing
    

    if(isset($_POST["login"])){
        echo "Form submitted successfully<br>";
    }
    else{
        echo "Form not submitted<br>";
    }

    if(empty($_POST["username"] || $_POST["password"])){
        echo "Field is empty<br>";
    }
    else{
        echo "Field is not empty<br>";
    }
    foreach($_POST as $key => $value){
        echo "Key: $key, Value: $value<br>";
    }



    $name="raksha";
    if (isset($name)){
        echo "name is set<br>";
    }
    else{
        echo "not set<br>";
    }
    $namee="wdwc";
    if(empty($namee)){
        echo "name is empty<br>";
    }
    else{
        echo "name is not empty<br>";
    }

?>