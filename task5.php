<?php
$bmw = array('X5', 120, 5, '2015');
$toyota = array('Camry', 100, 5, '2017');
$opel = array('Cadet', 90, 3, '2001');

$cars['bmw'] = $bmw;
$cars['toyota'] = $toyota;
$cars['opel'] = $opel;

foreach($cars as $key => $value) {
    echo "CAR ", $key,
    "<br />", implode(' ', $value), "<br />";
}