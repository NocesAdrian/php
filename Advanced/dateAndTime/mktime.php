<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

// better
<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>


// PHP is quite clever about converting a string to a date, so you can put in various values:
<?php
$d=strtotime("tomorrow"); // tommorow date
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday"); // next saturday
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months"); // data +3 months from today
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

// The example below outputs the dates for the next six Saturdays
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>

// The example below outputs the number of days until 4th of July:
<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>