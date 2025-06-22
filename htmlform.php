<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="htmlform.php" method="get">
        <label>UserName</label><br>
        <input type="text" name="username"><br>

        <label>Password</label><br>
        <input type="password" name="Password"><br>

        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>
<?php 
echo $_GET["username"] . "<br>";
echo "{$_GET["Password"]} <br>" ;


//absolute value function
//abs() function returns the absolute value of a number
echo abs(num: -10) . "<br>"; // 10

//round() function rounds a number to the nearest integer
echo round(num: 3.6) . "<br>"; // 4 or round($x, 2)--upto 2 positions

//floor() function rounds a number down to the nearest integer
echo floor(num: 3.6) . "<br>"; // 3

//ceil() function rounds a number up to the nearest integer
echo ceil(num: 3.6) . "<br>"; // 4 or abs($variable_name)

//pow() function raises a number to the power of another number
echo pow(num: 2, exponent: 3) . "<br>"; // 8 or pow($x,$y)

//sqrt() function returns the square root of a number
echo sqrt(num: 16) . "<br>"; // 4 or sqrt($variable_name

//max() function returns the highest value in a list of numbers
echo max(1, 2, 3, 4, 5) . "<br>"; // 5 or max($x,$y)

//min() function returns the lowest value in a list of numbers
echo min(1, 2, 3, 4, 5) . "<br>"; // 1 or min($x,$y,$z,$u)    

//pi() function returns the value of pi
echo pi() . "<br>"; // 3.141592653589793

//rand() function generates a random number
echo rand() . "<br>"; // random number between 0 and getrandmax()
echo rand(min: 1, max: 10) . "<br>"; // random number between 1 and 10 or rand(1,100)


?>