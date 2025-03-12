<?php
date_default_timezone_set("Asia/Manila");
echo "The time is " . date("h:i:sa");
?>

<?php

while (true) {
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
    sleep(1);
}
?>