<?php
// Show a message when an exception is thrown and then indicate that the process has ended:
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally { // always run wether theres an error or not
  echo "Process complete.";
}
?>