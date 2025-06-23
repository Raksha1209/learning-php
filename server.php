<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="server.php" method="post">     regularly you put the self file name,
        by any chance if file name is changed, that's where server keys are used-->
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">

        <label>UserName:</label><br>
        <input type="text" name="username"><br>

        
        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>




<?php
// $_SERVER= SGB that contains headers,path and script locations
//associative array=- entries are created by web server
//shows nearly everything you need to know abt the current web page env
    foreach($_SERVER as $key=>$value){
        echo"{$key}=>{$value} <br>";
    }

    //You can detect whether a page was accessed with GET or POST using:
    //REQUEST_METHOD- by default it is GET, but if you use POST method, it will be POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //if the form is submitted, then this code will be executed
        $username = htmlspecialchars($_POST["username"]);
        echo "Hello, {$username} <br>";
    } else {
        //if the form is not submitted, then this code will be executed
        echo "Please submit the form <br>";
    }

?>