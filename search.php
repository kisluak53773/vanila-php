<?php

declare(strict_types=1);

function find(string $string,$changeTo ,string $search): string
{
    return str_replace($search, $changeTo, $string);;
}

$str = " som stsrr sasa ss ";

echo find($str, "Hello", "s") . PHP_EOL;
