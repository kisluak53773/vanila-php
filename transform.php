<?php

declare(strict_types=1);

$str = " som stsrr sasa ss ";

function modify(string $string, string $symbol): string
{
    $result = trim($string);
    $result = str_replace($symbol, "Hello", $result);

    return $result;
}


$new = modify($str, "s");

echo $new . PHP_EOL;
