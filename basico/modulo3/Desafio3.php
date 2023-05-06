<?php

/*
 Perform the following arithmetic operations in PHP and store them in an array.
 Then output all of the results.
A) (14 + 82 - 32 / 2)^2
B) 18 * (3 / 6 - 9) * 10
C) 5 * (12 / 2 -8 * 4 +12 * 6)
 */

$a =  (14 + 82 - (32 / 2))**2;
$b = 18 * ((3 / 6) - 9) * 10;
$c = 5 * ((12 / 2) - (8 * 4) + (12 * 6));

$results = array($a, $b, $c);
print_r($results);