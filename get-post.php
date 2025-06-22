<?php 
    //special variables in php
    // <form action="somephpfile.php" method="get">

    //$_GET is used to collect data from a form with method="get"
    //$_POST is used to collect data from a form with method="post"
    //$_REQUEST is used to collect data from both "get" and "post" methods

    //$_GET------ data is appended to url 
    //$_POST----- data is sent in the body of the request, packaged inside body of http request
    //$_REQUEST-- data can be sent using either method, but it is not recommended to

    //$_GET-----not secure, can be cached, can be bookmarked, limited to 2048 characters,better for search pages,
    //$_POST----more secure, not cached, not bookmarked, no DATA limit, BETTER FOR SENSITIVE DATA, SUBMITTING FORMS,


?>