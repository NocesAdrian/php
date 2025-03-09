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
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($data)) {
            echo "text is empty";
        } else {
            echo "text: $data";
        }
    }

    ?>
</body>
</html>