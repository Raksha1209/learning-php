<?php
    // Arithmetic operations: +, -, *, /, %, ** (exponentiation)
    $a = 10;
    $b = 5; 
    $sum = $a + $b; // Addition
    $difference = $a - $b; // Subtraction
    $product = $a * $b; // <Multiplication>
    $quotient = $a / $b; // Division
    $remainder = $a % $b; // Modulus
    $exponentiation = $a ** $b; // Exponentiation
    echo "Sum: {$sum}<br>";
    echo "Difference: {$difference}<br>"; 
    echo "Product: {$product}<br>";
    echo "Quotient: {$quotient}<br>";
    echo "Remainder: {$remainder}<br>";
    echo "Exponentiation: {$exponentiation}<br>";

    $z=null; // null value
    $z = 10; // Assigning a value to null variable
    echo "Value of z: {$z}<br>"; // Output: 10
    $z = null; // Reassigning null value
    echo "Value of z after reassignment: {$z}<br>"; // Output: nothing

    // Increment and Decrement operators: ++, --
    $x = 5;
    $x++; // Increment
    echo "Value of x after increment: {$x}<br>"; // Output: 6
    $x--; // Decrement
    echo "Value of x after decrement: {$x}<br>"; // Output: 5

    // Assignment operators: =, +=, -=, *=, /=, %=, .=
    $y = 10; // Assignment
    $y += 5; // Add and assign
    echo "Value of y after += operation: {$y}<br>"; // Output: 15
    $y -= 3; // Subtract and assign
    echo "Value of y after -= operation: {$y}<br>"; // Output: 12
    $y *= 2; // Multiply and assign
    echo "Value of y after *= operation: {$y}<br>"; // Output:
    $y /= 4; // Divide and assign
    echo "Value of y after /= operation: {$y}<br>"; // Output:
    $y %= 3; // Modulus and assign
    echo "Value of y after %= operation: {$y}<br>"; // Output: 0
    $y .= " is the final value"; // Concatenate and assign
    echo "Value of y after .= operation: {$y}<br>"; // Output: 0 is the final value

    //operator precedence
    //()
    // **
    // * /%
    // + -

    $total=1 + 2 -3 * 4 / 5 ** 6 ;
    echo "{$total}<br>"; // Output: 2.99

?>