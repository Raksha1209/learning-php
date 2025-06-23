<?php
    $db_server="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="test_db";

    $conn="";
    try{
        // Create connection
        $conn = mysqli_connect($db_server, $db_user, $db_pass,
        $db_name);
    }
    catch(mysqli_sql_exception $e){
        echo "Connection failed: " . $e->getMessage();
    }
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
    }
?>