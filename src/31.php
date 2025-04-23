<?php
// Define variables and constants
$var1 = "value1";
$const1 = 42;

// Calculate $result and store in variable $result
$result = $var1 + $const1;
echo "The result of $result is: $result";

// Set $var2 equal to the value of $const1
$var2 = $const1;

// Print out a message with both $var1 and $var2
echo "<p>The values are:</p>";
echo "<ul>";
echo "<li>$var1 = " . htmlspecialchars($var1) . "</li>";
echo "<li>$const1 = " . htmlspecialchars($const1) . "</li>";
echo "</ul>";

// Convert $result to a string and display it in the output
$result_str = strval($result);
echo "The result of $var2 is: " . htmlspecialchars($result_str) . "<br>";
?>
