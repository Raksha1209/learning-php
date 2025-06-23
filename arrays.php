<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="arrays.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
        $capitals =array("USA"=>"Washington, D.C.",
                     "France"=>"Paris",
                     "Japan"=>"Tokyo");
        $capital= $capitals[$_POST["country"]];
        echo $capital . "<br>";

?>
<?php
    // Arrays in PHP-varaiable which holds more than one value, but of same datatype , at a time

    $foods=array("apple","banana","orange","grape");

    echo $foods[0] . "<br>"; // this dot is for string catenation
    foreach($foods as $food){
        echo $food . "<br>";
    }

    //append elements
    array_push($foods,"pinapple");
    echo $foods[4];
    array_pop($foods);
    echo $foods[3];

    array_shift($foods);
    $reversed_array = array_reverse($foods);

    foreach($reversed_array as $food){
        echo $food . "<br>";
    }
    echo count($foods);

?>


<?php
    // Associative arrays - key value pairs -array
    $foods = array(
        "fruit1" => "apple",
        "fruit2" => "banana",
        "fruit3" => "orange"
    );

    echo $foods["fruit1"] . "<br>";

    foreach($foods as $key => $value){
        echo "$key: $value <br>";
    }

    // Adding a new key-value pair
    $foods["fruit4"] = "grape";
    echo $foods["fruit4"];

    $capitals =array("USA"=>"Washington, D.C.",
                     "France"=>"Paris",
                     "Japan"=>"Tokyo");
    foreach($capitals as $country => $capital){
        echo "The capital of $country is $capital <br>";
        echo  "{$country} = {$capital}" ."<br>";
    }

    //change values
    $capitals["USA"] = "New York";
    echo "The capital of USA is now " . $capitals["USA"] . "<br>";

    //add new key-value pair
    $capitals["Germany"] = "Berlin";
    echo "The capital of Germany is " . $capitals["Germany"] . "<br>";

    //remove a key-value pair
    array_pop($capitals);
    echo "After removing the last element, the capitals array is: <br>";
    foreach($capitals as $country => $capital){
        echo "The capital of $country is $capital <br>";
    }
    
    //shifting elements
    array_shift($capitals);
    echo "After shifting the first element, the capitals array is: <br>";
    foreach($capitals as $country => $capital){
        echo "The capital of $country is $capital <br>";
    }

    //accessing key and value separately
    $keys=array_keys($capitals);
    $values=array_values($capitals);
    // value:key pairs
    $capitals=array_flip($capitals);

    foreach($capitals as $capital => $country){
        echo "{$capital}={$country}" . "<br>";
    }
// count elements in an array
    echo count($capitals) . "<br>";

