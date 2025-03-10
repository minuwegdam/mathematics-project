<?php
function calculate_pi($precision) {
  $pi = 0;
  $operations = 0;
  while ($operations <= $precision) {
    $pi += 1 / (pow(2 * $operations + 1, 2));
    $operations++;
  }
  return round($pi, $precision);
}
?>