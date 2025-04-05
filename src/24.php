<?php
function calculateGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$number1 = 28;
$number2 = 48;

echo "The greatest common divisor of $number1 and $number2 is: " . calculateGCD($number1, $number2);
?>
