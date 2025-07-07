<?php

function power($number,$exponent)
{
    $sum = 1;

    for ($i = 1;$i <= $exponent; $i++){
        $sum = $sum * $number;
    }

    return $sum;
}

function factorial($number)
{
    $sum = 1;

    while($number >= 1)
    {
        $sum = $sum * $number;

        $number--;
    }

    return $sum;
}

function series($n,$x)
{
    $sum = 0;
    for ($i = 1; $i <= $n;$i++)
    {
        if ($i % 2 === 0)
        {
            $sum = $sum + power($x,$i);
        } else {
            $sum = $sum + factorial($i);
        }
    }

    return $sum;
}

echo series(5,2);