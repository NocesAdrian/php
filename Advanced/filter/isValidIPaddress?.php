<!DOCTYPE html>
<html>
<body>

<?php
$ip = "127.0.0.1";

// if $ip is not false then its a valid ip address
if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
?>

</body>
</html>
