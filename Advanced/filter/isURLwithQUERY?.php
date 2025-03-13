<?php
$url = "https://www.w3schools.com";


// Validate URL - Must Contain QueryString

// if not false then return with a query string
// else doesnt have query
if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) !== false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}
?>