<?php

// You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file,
// while the "w" mode overrides (and erases) the old content of the file.

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>