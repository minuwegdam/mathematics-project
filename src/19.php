<?php
function squareRoot($value) {
    $sqrt = sqrt($value);
    if ($sqrt == intval($sqrt)) {
        echo "The square root of $value is a whole number.";
    } else {
        echo "The square root of $value is not a whole number.";
    }
}
