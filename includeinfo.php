<?php 
// include()-- copies the code from the specified file into the current file
// Sections of code becomes reusable 
// changes only need to be made in one place

//create a file home.html, --where header.html , footer.html are created, 
//in home.html, inside the php tag, include those 2 file 

    include 'header.html'; //include header file
    include 'footer.html'; //include footer file
?>


<!DOCTYPE html>
<html lang="en">        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Info</title>
</head>
<body>

    <h1>Welcome to the Include Info Page</h1>
    <p>This page demonstrates how to include header and footer files.</p>
    
    <?php
    // You can also include PHP files
    include 'functions.php'; // Assuming functions.php contains some reusable functions
    
    ?>
    <p>Here is some content specific to this page.</p>

</body>
</html>