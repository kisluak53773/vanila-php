<?php

declare(strict_types=1);

$strs = ['ass', 'jhon', 'data','someone'];

$nums = [1,23,4,12,532,2,5,10];

$newArr = array_merge($strs, $nums);

var_dump($newArr);