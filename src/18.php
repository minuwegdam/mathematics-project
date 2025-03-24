<?php
function count_even_numbers($numbers) {
    $count = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $count++;
        }
    }
    return $count;
}
?>
