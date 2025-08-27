<?php
$a = 5;
$b = 10;

// Perbandingan
var_dump($a == $b);   // false
var_dump($a != $b);   // true
var_dump($a < $b);    // true
var_dump($a > $b);    // false
var_dump($a <= $b);   // true
var_dump($a >= $b);   // false

// Logika
var_dump($a < 10 && $b > 5); // true (AND)
var_dump($a < 3 || $b > 8);  // true (OR)
var_dump(!($a == 5));        // false (NOT)
?>

