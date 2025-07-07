<?php

/****
 *
 * Calculate Area
 *
 */

$a = 5;
$b = 8;

$area = $a * $b;

echo $area;

/***
 * Calculate Perimeter
 */

$a = 5;
$b = 8;

$perimeter = ($a + $b) * 2;

echo $perimeter;

/***
 * Calculate width
 */

$a = 5;
$perimeter = 26;

$b = ($perimeter / 2) - $a;

echo $b;

/***
 * Calculate Area of Circle
 */

$r = 5;
const PI = 3.14;
$area = PI * pow($r,2);

echo $area;

/***
 * Calculate Perimeter of Circle
 */

$r = 5;
$perimeter = 2 * PI * $r;

echo $perimeter;



$a = 2;
$b = 4;
$sum = 1;

for ($i = 1;$i < $b; $i++){
    $a = $a * $a;
}

echo $a;