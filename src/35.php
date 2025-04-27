<?php
// Generate random number between 1 and 100
$randomNum = rand(1, 100);

// Print the generated number
echo "Random Number: $randomNum";

// Determine if it's even or odd
if ($randomNum % 2 == 0) {
    echo "The number is even.";
} else {
    echo "The number is odd.";
}

// Check if the number is divisible by both 3 and 5
if ($randomNum % 3 == 0 && $randomNum % 5 == 0) {
    echo "Divisible by both 3 and 5.";
}
