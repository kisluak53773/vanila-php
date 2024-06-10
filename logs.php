<?php

declare(strict_types=1);

function findErrorLogs(string $filepath): array
{
    $fileContent = file_get_contents($filepath);
    $errorMessages = [];

    if (preg_match_all("/ERROR: (.*)/i", $fileContent, $matches)) {
        $errorMessages = $matches[0];
    }

    return $errorMessages;
}

var_dump(findErrorLogs('./logs.txt'));

function countLogs(string $filepath): int
{
    $fileContent = file_get_contents($filepath);
    $matchingLogs = [];

    if (preg_match_all("/[A-Z]+: (POST|DELETE|PUT|UPDATE|PATCH) (.*) 31-Mar-2002:19:3[1-5]/i", $fileContent, $matches)) {
        $matchingLogs = $matches[0];
    }

    return count($matchingLogs);
}

var_dump(countLogs('./logs.txt'));

