<?php

declare(strict_types=1);

function removeHtmlTags(string $htmlString): string
{
    $pattern = "/<[^>]*>/";
    $cleanedString = preg_replace($pattern, '', $htmlString);

    return $cleanedString;
}

$html = "<p>some html </p> <h1>example</h1>";

echo removeHtmlTags($html) . PHP_EOL;

function findUrls(string $htmlString): array
{
    $pattern = '/href=[\'"]?([^\'" >]+)/';
    preg_match_all($pattern, $htmlString, $matches);
    return $matches[1];
}

$text = "<a href='https://www.google.com'>";

$result = findUrls($text);

var_dump($result);

echo PHP_EOL;
