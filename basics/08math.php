<?php

// constant pi
echo(pi());

// The min() and max()
// functions can be used to find the lowest or highest 
// value in a list of arguments:
echo("<br>".min(0, 150, 30, 20, -8, -200));
echo("<br>".max(0, 150, 30, 20, -8, -200));

// The abs() function returns the absolute (positive) value of a number:
echo("<br>".abs(-6.7));

// The sqrt() function returns the square root of a number:
echo(sqrt(64));

// The round() function rounds a floating-point number to its nearest integer:
echo("<br>".round(0.60));
echo("<br>".round(0.49));

// The rand() function generates a random number:
echo("<br>".rand());

// For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100):
echo("<br>".rand(10, 100));




?>