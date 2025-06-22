<?php
    echo"hello<br>";
    echo"it's really good";
    //this is a comment
    /*   This is a multi-line comment
       This is another line of the multi-line comment
       This is the last line of the multi-line comment
    */
    //cool thing is it can include html , css
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <button>Click Me</button>
    </body>
    </html>

<?php
    //variables:string, integer, float , boolean, array, object, null
    $name = "John "; //string
    echo $name;
    echo"hello {$name}<br>"; //string interpolation


//--------------------------------------------------------------------------------------------------------------
    $age = 25; //integer
    echo "I am {$age} years old<br>"; //string interpolation


//--------------------------------------------------------------------------------------------------------------
    $height = 5.9; //float
    echo "My height is {$height} feet<br>"; //string interpolation
    $price = 19.99; //float
    echo "The price is \${$price}<br> "; //string interpolation


//--------------------------------------------------------------------------------------------------------------
    $isStudent = true; //boolean
    if ($isStudent) {
        echo "I am a student<br>";
    } else {
        echo "I am not a student<br>";
    }
    $isOnline = false; //boolean
    echo"Student status:{$isOnline}<br>"; // false will be printed as nothing
    echo"Student status:{$isStudent}<br>";// true will be printed as 1
    ?>
    