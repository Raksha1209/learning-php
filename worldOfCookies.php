<?php 
//cookie is info abt a user stored in a users in browser
//cookie is a small piece of data stored on the client side
//cookie is used to remember user preferences, login info, etc
//cookie is set using setcookie() function
//cookie is sent to the server with every request
//cookie is stored in the browser and can be accessed using $_COOKIE superglobal variable
//cookie is stored in the browser for a specific period of time, as key -value, until expired, not secure

    //  setcookie(key, value, expire)
        setcookie("fav_food","upma",time()+86400, "/"); //86400 seconds = 1 day,
        //inspect>application>cookies>fav_food
        //"/" means cookie is available for the entire website, if we give "/worldOfCookies.php" then cookie is available only for that page
        //too delete a cookie, set the expire time to a past time---0
         
        setcookie("fav_food","upma",time()-0, "/"); 
        //print 
        foreach($_COOKIE as $key => $value){
            echo "Key: $key, Value: $value<br>";
        }
