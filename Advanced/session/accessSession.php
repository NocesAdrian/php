<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_SESSION['favColor'];
        echo $_SESSION['favPet'];

        print_r($_SESSION); // prints all varibles stored in session global
    ?>
</body>
</html>