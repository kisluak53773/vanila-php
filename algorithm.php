<?php

declare(strict_types=1);

function bubbleSort($array)
{
    if(sizeof($array) <= 0) {
        return $array;
    };

    $toSort = true;

    do {
        $toSort = false;

        for ($i = 0; $i < sizeof($array); $i++) {
            if ($i + 1 < sizeof($array) && $array[$i] > $array[$i + 1]) {
                $toSort = true;
                $currElem = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $currElem;
            }
        }
    } while ($toSort);

    return $array;
}

$nums = [1,23,4,12,532,2,5,10];

$sorted = bubbleSort($nums);

var_dump($sorted);
