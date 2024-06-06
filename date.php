<?php

declare(strict_types=1);

function formatDate(string $string): string
{   
        $timestamp = strtotime(str_replace('.', '-', $string));
        $newDate = date('Y-m-d', $timestamp);
        
        return $newDate;
}

$originalDate = "20.09.2022";

$formatedDate = formatDate($originalDate);

echo $formatedDate . PHP_EOL;