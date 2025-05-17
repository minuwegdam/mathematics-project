<?php
// Define a function to perform some calculations
function sumNumbers($numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

// Example usage of the function
$numbers = [1, 2, 3, 4, 5];
echo "The sum is: " . sumNumbers($numbers);
?>
