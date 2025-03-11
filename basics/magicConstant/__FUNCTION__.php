<?php

// If inside a function, the function name is returned.

function nameOfFuntion() {
    echo __FUNCTION__;
    return __FUNCTION__;
}

nameOfFuntion();
echo "\n".nameOfFuntion();
?>