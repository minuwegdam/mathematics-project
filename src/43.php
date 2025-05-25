<?php
// Example PHP code for generating random data

// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Display the generated random number
echo "Random Number: $randomNumber";

// Generate a random string with 5 characters consisting of uppercase letters and lowercase letters
$string = strtolower(substr(str_shuffle("ZYXWVUTASDFGHJKLBCDEFG"), 0, 5));

// Display the generated random string
echo "Generated String: $string";
?>
