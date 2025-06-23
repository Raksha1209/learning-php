<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post">
        <input type="checkbox" name="fruits[]" value="apple">Apple<br> <!--why use arrays----since user can check multiple values-->
        <input type="checkbox" name="fruits[]" value="banana">Banana<br>
        <input type="checkbox" name="fruits[]" value="orange">Orange<br>
        <input type="checkbox" name="fruits[]" value="grape">Grape<br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(isset($_POST["fruits"])) {
            foreach($_POST["fruits"] as $fruit) {
                switch($fruit){
                    case "apple":
                        echo "You selected Apple<br>";
                        break;
                    case "banana":
                        echo "You selected Banana<br>";
                        break;
                    case "orange":
                        echo "You selected Orange<br>";
                        break;
                    case "grape":
                        echo "You selected Grape<br>";
                        break;
                }
            }
        } else {
            echo "No fruit selected<br>";
        }
    }
?>