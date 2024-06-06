<?php

declare(strict_types=1);

function isAnagram(string $str1, string $str2): bool
{
    $word1 = str_split($str1);
    $word2 = str_split($str2);
    sort($word1);
    sort($word2);

    return $word1 === $word1;
}

$word1 = "listen";
$word2 = "silent";

echo isAnagram($word1,$word2) . PHP_EOL;

function isPalindorm(string $str): bool
{
    $lower = strtolower($str);
    $buffer = str_split($lower);

    $left = 0;
    $right = count($buffer) - 1;

    while($left < $right){
        if($buffer[$left] !== $buffer[$right]){
            return false;
        }

        $left++;
        $right--;
    }

    return true;
}

$palindrom = 'rotator';

echo isPalindorm($palindrom) . PHP_EOL;