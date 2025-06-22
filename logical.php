<?php 
     //logical operators=combine conditional statements
        //and, or, not, xor
        // && is used for and
        // || is used for or
        // ! is used for not
        // ?? is used for and
        // xor is used for exclusive or

        $a = 10;
        $b = 20;
        $c = 30;
        //and
        if ($a < $b && $b < $c) {
            echo "Both conditions are true.<br>";
        } else {
            echo "At least one condition is false.<br>";
        }

        //or
        if ($a < $b || $b > $c) {
            echo "At least one condition is true.<br>";
        } else {
            echo "Both conditions are false.<br>";
        }

        //not
        if (!($a > $b)) {
            echo "The condition is false.<br>";
        } else {
            echo "The condition is true.<br>";
        }

        //xor
        if ($a < $b xor $b > $c) {
            echo "One condition is true and the other is false.<br>";
        } else {
            echo "Both conditions are either true or false.<br>";
        }

        //null coalescing operator
        $value = null;
        $result = $value ?? "Default Value";
        echo "The result is: {$result}<br>";
        //if $value is null, it will return "Default Value", otherwise it will return $value 


?>

<?php
    //switche statement
    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "It's the start of the week.<br>";
            break;
        case "Tuesday":
            echo "It's the second day of the week.<br>";
            break;
        case "Wednesday":
            echo "It's hump day!<br>";
            break;
        case "Thursday":
            echo "Almost the weekend!<br>";
            break;
        case "Friday":
            echo "It's the last day of the work week!<br>";
            break;
        case "Saturday":
        case "Sunday":
            echo "It's the weekend!<br>";
            break;
        default:
            echo "Invalid day.<br>";
    }
?>