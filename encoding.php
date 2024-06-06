<?php

declare(strict_types=1);

function encode(string $str): string
{
    return base64_encode($str);
}

function decode(string $str): string
{
    return base64_decode($str);
}

$data = "Some data";

$coded = encode($data);

echo $coded . PHP_EOL;

echo decode($coded) . PHP_EOL;