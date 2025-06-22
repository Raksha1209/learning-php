<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="looping.php" method="post">
        <label> Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="Start">
    </form>
</body>
</html>
<?php
    $counter=$_POST["counter"];

    // for($i=0;$i<=$counter;$i++){
    //     echo $i . "<br>";
    // }

    for($i=$counter;$i>=0;$i--){
        echo $i . "<br>";
    }

?>
<?php
//for loop
    for ($i = 0; $i < 5; $i++) {
        echo "Iteration: {$i}<br>";
    }

    for($i=6;$i>=0;$i--){
        echo"hello<br>";
    }


    //while loop
    $counter = 0;
    while($counter<10){
        echo $counter . "<br>";
        $counter++;
    }

    $isOnline=true;
    while($isOnline){
        echo "User is online<br>";
        $isOnline=false; //to prevent infinite loop
    }
?>