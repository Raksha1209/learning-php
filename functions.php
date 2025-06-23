<?php
//function== reuse the code , myfunc()----> declare

use function PHPSTORM_META\type;

    function hpy_bthday($name){
        echo "Happy Birthday to you dear {$name}!<br>";
        echo "Happy Birthday to you!<br>";
        echo "Happy Birthday dear friend!<br>";
        echo "Happy Birthday to you!<br>";

    } 
    hpy_bthday("ben"); //function call

    function add(int $a, int $b){
        return $a + $b; //return statement
    }
    //void, mixed, return type are for function declaration,
    //void means no return value, mixed means any type of return value, 
    //there are only 2 types of return type in php,
    // return type is used to specify the type of value that a function will return





?>