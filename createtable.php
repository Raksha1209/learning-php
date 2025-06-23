<?php 
    include("database.php");

    $sql="INSERT into users (username, password, email) VALUES ('testuser', 'testpass', 'bob@123gmail.com')";

    mysqli_query($conn, $sql);


    //retrieving data from the database
    $sql = "SELECT * FROM users WHERE username='testuser'";
    $result = mysqli_query($conn,$sql);


    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result); 
        // in while loop to return all rows
        // while($row = mysqli_fetch_assoc($result)) {  

        echo $row["username"] . "<br>";
        echo $row["password"] . "<br>";
        echo $row["reg_date"] . "<br>";
        //}
    }

    else{
        echo "0 results";
    }

    mysqli_close($conn);
   
?> 