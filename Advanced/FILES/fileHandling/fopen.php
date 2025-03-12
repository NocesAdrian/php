<?php

$file = fopen("text.txt", "r") or die("unable to open");
echo fread($file, filesize('text.txt'));
fclose($file);

?>