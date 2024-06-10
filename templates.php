<?php

declare(strict_types=1);

function findRepeatingWord(string $str, int $amount): array
{
    $pattern = '/\b((\w+)\s+){' . $amount . '}\b/i';

    echo $pattern;

    preg_match_all($pattern, $str, $matches);

    return $matches[0] ?? [];
}

$string = 'word word hello world data data data';

var_dump(findRepeatingWord($string, 4));

function generateHtmlLinks(array $urls): array
{
    $links = [];

    foreach ($urls as $url) {
        $links [] = '<a href="' . $url . '">Visit ' . $url .'</a>';
    }

    return $links;
}

$links = ['https://www.w3schools.com', 'https://google.com'];

var_dump(generateHtmlLinks($links));