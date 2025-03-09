<?php

// for loop
for ($i = 0; $i < 10; $i++) {
    echo "<br>The number is: $i <br>";
}




// Loop through the items of an indexed array:
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}







// do......while
$i = 1;

do {
  echo $i."<br>";
  $i++;
} while ($i < 6);






// normal
$i = 1;
while ($i < 6) {
  echo $i."<br><br>";
  $i++;
}







// With the break statement we can stop the loop even if the condition is still true:
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i.'<br><br>';
  $i++;
} 







// Stop, and jump to the next iteration if $i is 3:

$i = 0;
while ($i < 6) {
  $i++;
  if ($i == 3) continue;
  echo $i."<br><br>";
}








// The while loop syntax can also be written with the endwhile statement like this
$i = 1;
while ($i < 6):
  echo $i."<br>";
  $i++;
endwhile;


?>