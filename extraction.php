<?php

declare(strict_types=1);

function findUrls(string $html):array
{
    $pattern = '/"([a-zA-Z]+[.:\/]+)?(www\.)?[a-zA-Z0-9]+\.[a-z]{2,}([\/a-zA-Z._0-9]+)?"/';
    preg_match_all($pattern, $html, $matches );

    return $matches[0];
}

$text = '<a href="https://www.google.com">';

var_dump(findUrls($text));

function findGroupsByComma(string $text):array
{
    $pattern = '/(([ ,]+)?[a-zA-Z]+[,.:])+/';
    preg_match_all($pattern, $text, $matches);

    return $matches[0];
}

$test ='asda, aww, SDdasdsaa,    awdw adsds, ads.';

var_dump(findGroupsByComma($test));