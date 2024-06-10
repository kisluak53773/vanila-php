<?php

declare(strict_types=1);

function formatPhoneNumber(string $phoneNumber): string
{
    $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

    if (strlen($phoneNumber) !== 11) {
        return "Invalid phone number";
    }

    return  '+7 (' . substr($phoneNumber,0,3) . ") " . substr($phoneNumber,3,3) . "-" . substr($phoneNumber,6);
}

$testNumber = '01234567891 dasasd';

echo formatPhoneNumber($testNumber) . PHP_EOL;

$dateStr = "2022-09-25";

echo date('d.m.Y', strtotime($dateStr)) . PHP_EOL;