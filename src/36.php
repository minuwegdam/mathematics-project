<?php
// Define an array of numbers to be sorted
numbers = [4, 2, 5, 1, 3];

// Function to sort the array in ascending order
function quickSort($array) {
    if (count($array) <= 1) return $array;
    $pivot = $array[0];
    $left = array_filter($array, function($value) use ($pivot) { return $value < $pivot; });
    $right = array_filter($array, function($value) use ($pivot) { return $value >= $pivot; });

    // Recursively sort the left and right parts
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// Call the quickSort function with the original numbers array
$sortedNumbers = quickSort($numbers);

// Print the sorted numbers array
print_r($sortedNumbers);
?>
