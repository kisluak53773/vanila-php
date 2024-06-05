<?php

declare(strict_types=1);

$strs = ['ass', 'jhon', 'data','someone'];

$result = array_search('ass',$strs);

if ($result !== false) {
    echo 'index of a string:' . $result . PHP_EOL;
} else {
    echo "String is not found" . PHP_EOL;
}