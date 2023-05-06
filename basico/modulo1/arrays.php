<?php

//podemos ter arrays com tipos diferentes dentro

//Indexed Arrays
$colors = array('red', 'blue', 'green');
print_r($colors);

echo '<p>' . $colors[1] . '</p>';

$colors[] = 'yellow';

print_r($colors);

//Associative array (chave-valor)
$home_towns = array(
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
);

echo '<pre>';
print_r($home_towns);
echo '</pre>';

echo '<p>' . $home_towns ['Dave'] . '</p>';

print_r($colors);

?>
