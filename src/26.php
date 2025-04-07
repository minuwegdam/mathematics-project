<?php
// Example PHP code to explore mathematical concepts through coding.
// In this example, we'll create a simple array and perform some basic arithmetic operations.

$numbers = [10, 20, 30];
$result = 0;
foreach ($numbers as $number) {
    $result += $number;
}
echo "The sum of the numbers is: " . $result;

// Additional mathematical operations
echo "The product of the numbers is: " . $result * 10; // Since we are adding a constant, multiplying by 10 will change it.
