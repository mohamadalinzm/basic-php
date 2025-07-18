<?php

function searchArray(array $array,int $searchValue)
{
    $index = -1;

    foreach ($array as $key => $value)
    {
        if ($value === $searchValue)
        {
            $index = $key;
            break;
        }
    }

    return $index;
}

$a = [1,2,3,4,5];
$value = readline("Enter a value to search: ");
echo searchArray($a,$value);