<?php
// Calculate the factorial of a given number
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Test the function with a few inputs
echo factorial(5); // Output: 120
echo factorial(3); // Output: 6
echo factorial(0); // Output: 1