<?php

declare(strict_types=1);

function getRidOfRepetition(string $str): string
{
    $pattern = '/\b(\w+)\s+\1\b/i';
    $result = preg_replace($pattern, '', $str);

    return trim($result);
}

$text = "hello hello world world world example example hello";

echo getRidOfRepetition($text) . PHP_EOL;

function correctTypos(string $str): string
{
    $corrections = array(
        "Thiss" => "This",
        "testt" => "test",
    );

    foreach ($corrections as $error => $correct) {
        $str = str_replace($error, $correct, $str);
    }

    return $str;
}

$text = "Thiss is a testt";

echo correctTypos($text) . PHP_EOL;