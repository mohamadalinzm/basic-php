<?php

function sumArray(array $array)
{
    $sum = 0;

    foreach ($array as $value)
    {
        $sum += $value;
    }

    return $sum;
}

$a = [1,2,3,4,5];
echo sumArray($a);