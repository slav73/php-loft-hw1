<?php
$age;
$age = 30;

if ($age <= 65 && $age >= 18) {
    echo '"Вам еще работать и работать"<br />';
} elseif ($age > 65) {
    echo '"Вам пора на пенсию"<br />';
} elseif ($age >= 1 && $age < 18) {
    echo '"Вам ещё рано работать"<br />';
} else {
    echo '"Неизвестный возраст"<br />';
}