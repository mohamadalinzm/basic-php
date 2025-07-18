<?php

$array = [12,3,21,4,17,1,22,15];

function bubbleSort(array $array): array
{
    for ($i = 0; $i < count($array) - 1; $i++)
    {
        for ($j = 0; $j < count($array) - $i - 1; $j++)
        {
            if ($array[$j] > $array[$j + 1])
            {
                swap($array, $j, $j + 1);
            }
        }
    }


    return $array;
}

function swap(array &$array, $i, $j): void
{
    $temp = $array[$i];
    $array[$i] = $array[$j];
    $array[$j] = $temp;
}

print_r(bubbleSort($array));

