<?php 
session_start();
header("Location: accesSession.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION['favColor'] = 'red';
        $_SESSION['favPet'] = 'parrot';
        print_r($_SESSION);
    ?>
</body>
</html>