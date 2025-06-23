<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radiobtns.php" method="post">
        <input type="radio" name="cards" value="visa">Visa<br>
        <input type="radio"  name="cards" value="mastercard">MASTERCARD<br>
        <input type="radio"  name="cards" value="paypal">PAYPAL<br>
        <input type="radio"  name="cards" value="bitcoin">BITCOIN<br>
        <input type="submit" name="confirm" value="Submit"><br>
    </form>
</body>
</html>
<?php

    if(isset($_POST["confirm"])){
        $cards_s = $_POST['cards'];
        echo $cards_s;
    }