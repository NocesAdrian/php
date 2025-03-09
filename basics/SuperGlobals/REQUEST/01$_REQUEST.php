<?php

/*

$_REQUEST is a PHP super global variable which contains submitted form data,
and all cookie data.

In other words, $_REQUEST is an array containing data 
from $_GET, $_POST, and $_COOKIE.

You can access this data with the $_REQUEST keyword followed by 
the name of the form field, or cookie, like this:

$_REQUEST['firstname']

*/


// request basically get a data when we request to get it

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="inputData">
        <input type="submit">
    </form>

    <?php
        // htmlspecialchars() to add security convert to pure text
        $data = htmlspecialchars($_REQUEST['inputData']); // get the data of html input that has name "inputData"
        echo "text: $data";
    ?>
</body>
</html>