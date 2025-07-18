<?php

$array = [12,3,21,4,17,1,22,15];

function selectionSort(array $array): array
{
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] < $array[$minIndex]) {
                $minIndex = $j;
            }
        }
        if ($minIndex != $i) {
                swap($array, $i, $minIndex);
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

print_r(selectionSort($array));

