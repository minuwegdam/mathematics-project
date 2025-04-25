<?php
// Function to calculate the factorial of a number
function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Function to print prime numbers up to n
function primes_up_to_n($n) {
    for ($i = 2; $i <= $n; $i++) {
        if (is_prime($i)) {
            echo $i . " ";
        }
    }
}

// Function to check if a number is prime
function is_prime($number) {
    if ($number == 1 || $number == 0) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Example usage
echo "Factorial of 5: " . factorial(5);
echo "\nPrimes up to 10: ";
primes_up_to_n(10);
