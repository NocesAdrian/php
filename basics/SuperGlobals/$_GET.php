<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
  Name: <input type="text" name="name"><br>
  E-mail: <input type="text" name="email">
  <input type="submit">
</form>

<?php

$name = htmlspecialchars($_GET["name"]);
$email = htmlspecialchars($_GET["email"]);
if (empty($name) || empty($email)) {
    echo "Please fill up everything!";
} else {
    echo "Welcome $name!<br>";
    echo "Email: $email";
}

?>
</body>
</html>