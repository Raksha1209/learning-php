<?php
    //hashing- transforming sensitive data into letters, numbers,symbols, 
    //via maths
    $password="mysecretpassword";

    $hashed=password_hash($password, PASSWORD_DEFAULT);
    //PASSWORD_DEFAULT- uses the best algorithm available on the server
    //bcrypt- is the best algorithm available on the server
    echo "Hashed password: {$hashed} <br>"; 

//checking for consistency
    //password_verify- checks whether the password matches the hashed password
    if(password_verify($password, $hashed)){
        echo "Password is valid <br>";
    } else {
        echo "Invalid password <br>";
    }
?>