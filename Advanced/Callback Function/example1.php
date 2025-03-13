<?php 

function show($value) {
    echo $value;
}

function fun($displayText, $value) {
    $displayText($value);
}

fun('show','hello world!');

?>