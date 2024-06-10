<?php

declare(strict_types=1);

function findRepeatingWord(string $str, int $amount): array
{
    $pattern = "/\\b(\\w+)\\s+\\1{{$amount}}\\b/i";

    echo $pattern;

    preg_match_all($pattern, $str, $matches);

    return $matches ?? [];
}

$string = 'word word hello world data data data';

var_dump(findRepeatingWord($string, 0));