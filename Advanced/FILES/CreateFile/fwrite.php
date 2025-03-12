<?php
//The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

/*

Notice that we wrote to the file "newfile.txt" twice. 
Each time we wrote to the file we sent the string $txt that first contained "John Doe" 
and second contained "Jane Doe". After we finished writing, we closed the file using the fclose() function.

If we open the "newfile.txt" file it would look like this:

John Doe
Jane Doe


*/
?>