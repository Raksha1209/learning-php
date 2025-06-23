<?php 
    $str="  Raksha  ";

    $str1=strtolower($str);
    $str2=strtoupper($str); 
    $str3=trim($str); //removes whitespace from the beginning and end of the string
    $str4=str_pad($str,20,"0"); //pads upto 20, with "0"
    $str5=str_repeat($str,3); //repeats the string 3 times
    $str6=str_replace("a","A",$str); //replaces "a"
    $str7=substr($str,0,3); //returns the first 3 characters of the string
    $str8=strrev($str); //reverses the string
    $str9=str_word_count($str); //counts the number of words in the string
    $str10=strlen(  $str); //counts the number of characters in the string
    $str11=strcmp($str,"Raksha"); //compares two strings, returns 0 if equal, <0 if str1 < str2, >0 if str1 > str2
    $str12=strpos($str,"k"); //finds the position of the first occurrence of a substring in a string, returns false if not found

 //like splicing

    $str13=explode("a",$str); //splits the string into an array using "a" as the delimiter
    $str14=implode("a",$str13); //joins the array elements into a string using "a" as the delimiter

    echo "Lowercase: $str1 <br>";
    echo "Uppercase: $str2 <br>";   
    echo "Trimmed: $str3 <br>";
    echo "Padded: $str4 <br>";
    echo "Repeated: $str5 <br>";
    echo "Replaced: $str6 <br>";
    echo "Substring: $str7 <br>";
    echo "Reversed: $str8 <br>";
    echo "Word Count: $str9 <br>";
    echo "Length: $str10 <br>";
    echo "Comparison: $str11 <br>";
    echo "Position: $str12 <br>";
    echo "Exploded: ";
    print_r($str13); //prints the array returned by explode
    echo "<br>";
    echo "Imploded: $str14 <br>";