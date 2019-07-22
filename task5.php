<?php
$bmw = ['X5', 120, 5, '2015'];
$toyota = ['Camry', 100, 5, '2017'];
$opel = ['Cadet', 90, 3, '2001'];

$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach($cars as $key => $value) {
    echo "CAR ", $key, PHP_EOL;

    foreach($value as $key1 => $value1) {
        echo $value1, " ";
    }
    echo PHP_EOL;
}