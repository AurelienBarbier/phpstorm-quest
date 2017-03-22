<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 22/03/17
 * Time: 16:07
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

foreach ($students as $student => $avg){
    echo $student . " :: " . $avg . "<br/>";
}

echo "La moyenne generqle est : " . array_sum($students) / count($students);