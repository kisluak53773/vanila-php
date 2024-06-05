<?php

declare(strict_types=1);

$strs = ['ass', 'jhon', 'data','someone'];

$newArr = array_map(fn ($item) => strtoupper($item), $strs);

var_dump($newArr);
