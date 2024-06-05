<?php

declare(strict_types=1);

$nums = [1,23,4,12,532,2,5,10];

array_splice($nums,0,4);

var_dump($nums);