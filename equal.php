<?php

declare(strict_types=1);

function compareStrins(string $str1, string $str2): bool
{
    return !(bool)strcasecmp($str1, $str2);
}

function sortString(array $strings): array
{
    asort($strings);

    return $strings;    
}

$name1 = "Alex";
$name2 = "alex";

echo "Result:" . compareStrins($name1, $name2) . PHP_EOL;

$strings = ["Apple", "banana", "Cat", "dog", "Elephant"];

var_dump(sortString($strings));