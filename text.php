<?php

declare(strict_types=1);

function countWords(string $str): int
{
    return str_word_count($str);
}

$text = "<p>some html </p> <h1>example</h1>";

echo "Words:" . countWords($text) . PHP_EOL;

function getRidOfDuplicates(string $str): string
{
    $buffer = explode(" ", $str);
    $uniq = array_unique($buffer);

    return implode(' ', $uniq);
}

$animals = "monkey monkey elephant";

echo getRidOfDuplicates($animals) . PHP_EOL;