<?php
function calculate_factorial($number) {
    if ($number <= 1) {
        return 1;
    } else {
        return $number * calculate_factorial($number - 1);
    }
}

echo calculate_factorial(5); // Output: 120
?>
