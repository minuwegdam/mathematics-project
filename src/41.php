<?php
// Define variables and constants from math_project.php
define("MAX_NUMBER", 100);
define("PI", M_PI);

function calculateArea($radius) {
    return M_PI * $radius ** 2;
}

function calculateCircumference($radius) {
    return 2 * PI * $radius;
}

// Test the functions with different radius values
echo "Area with a radius of 5: " . calculateArea(5) . "\n";
echo "Circumference with a radius of 5: " . calculateCircumference(5) . "\n";

?>
