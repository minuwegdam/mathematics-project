<?php
function getRandomNumber($min, $max) {
    $diff = $max - $min;
    return $min + ($diff * rand() / getrandmax());
}
?>
