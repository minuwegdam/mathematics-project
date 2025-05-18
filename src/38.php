<?php
// Define the number of elements to be generated
$num_elements = 10;

// Generate random numbers between 1 and 100 (inclusive)
$numbers = array();

for ($i = 0; $i < $num_elements; $i++) {
    // Generate a random number between 1 and 100
    $number = rand(1, 100);
    // Add the generated number to the array
    $numbers[] = $number;
}

// Output the array of numbers
print_r($numbers);
?>
