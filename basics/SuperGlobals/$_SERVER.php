<?php

/*

$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

The example below shows how to use some of the elements in $_SERVER:

*/

echo $_SERVER['PHP_SELF']."<br><br>"; // get the current php page file path
echo $_SERVER['GATEWAY_INTERFACE']."<br><br>";
echo $_SERVER['SERVER_ADDR']."<br><br>";
echo $_SERVER['SERVER_NAME']."<br><br>";
echo $_SERVER['SERVER_SOFTWARE']."<br><br>";
echo $_SERVER['SERVER_PROTOCOL']."<br><br>";
echo $_SERVER['REQUEST_METHOD']."<br><br>";
echo $_SERVER['REQUEST_TIME']."<br><br>";
echo $_SERVER['REQUEST_TIME_FLOAT']."<br><br>";
echo $_SERVER['QUERY_STRING']."<br><br>";
echo $_SERVER['DOCUMENT_ROOT']."<br><br>";
echo $_SERVER['HTTP_ACCEPT']."<br><br>";
echo $_SERVER['HTTP_ACCEPT_CHARSET']."<br><br>";
echo $_SERVER['HTTP_ACCEPT_ENCODING']."<br><br>";
echo $_SERVER['HTTP_ACCEPT_LANGUAGE']."<br><br>";
echo $_SERVER['HTTP_CONNECTION']."<br><br>";
echo $_SERVER['HTTP_HOST']."<br><br>";
echo $_SERVER['HTTP_REFERER']."<br><br>";
echo $_SERVER['HTTP_USER_AGENT']."<br><br>";
echo $_SERVER['HTTPS']."<br><br>";
echo $_SERVER['REMOTE_ADDR']."<br><br>";
echo $_SERVER['REMOTE_HOST']."<br><br>";
echo $_SERVER['REMOTE_PORT']."<br><br>";
echo $_SERVER['REMOTE_USER']."<br><br>";
echo $_SERVER['REDIRECT_REMOTE_USER']."<br><br>";
echo $_SERVER['SCRIPT_FILENAME']."<br><br>";
echo $_SERVER['SERVER_ADMIN']."<br><br>";
echo $_SERVER['SERVER_PORT']."<br><br>";
echo $_SERVER['SERVER_SIGNATURE']."<br><br>";
echo $_SERVER['PATH_TRANSLATED']."<br><br>";
echo $_SERVER['SCRIPT_NAME']."<br><br>";
echo $_SERVER['REQUEST_URI']."<br><br>";
echo $_SERVER['PHP_AUTH_DIGEST']."<br><br>";
echo $_SERVER['PHP_AUTH_USER']."<br><br>";
echo $_SERVER['PHP_AUTH_PW']."<br><br>";
echo $_SERVER['AUTH_TYPE']."<br><br>";
echo $_SERVER['PATH_INFO']."<br><br>";
echo $_SERVER['ORIG_PATH_INFO']."<br><br>";

?>