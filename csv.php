<?php

declare(strict_types=1);

function readCSV(string $filePath): array
{
    $csvFile = fopen($filePath, "r");
    $data = [];

    if ($csvFile !== false) {
        $headers = fgetcsv($csvFile);

        while (($row = fgetcsv($csvFile)) !== false) {
            $data[] = array_combine($headers, $row);
        }

        fclose($csvFile);
    }

    return $data;
}

var_dump(readCSV('./data.csv'));

function updateCsv(string $filePath, array $data): void
{
    $csvFile = fopen($filePath, "a");

    if ($csvFile !== false) {
        foreach ($data as $row) {
            fputcsv($csvFile, $row);
        }

        fclose($csvFile);
    }
}

$data = [
    ['Anderi', 25, 'Russia'],
];

updateCsv('./data.csv', $data);