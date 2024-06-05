<?php

declare(strict_types=1);

$userData = [
    ["name" => "Jhon", "age" => 22],
    ["name" => "Shon", "age" => 12],
    ["name" => "Whon", "age" => 24],
    ["name" => "Fhon", "age" => 15],
    ["name" => "Hhon", "age" => 23],
    ["name" => "Qhon", "age" => 17],
    ["name" => "Khon", "age" => 20],
    ["name" => "Lhon", "age" => 11],
    ["name" => "Phon", "age" => 6],
    ["name" => "Bhon", "age" => 28],
    ["name" => "Ehon", "age" => 9],
];

$filteredArr = array_filter($userData, fn ($item) => $item['age'] > 18);

var_dump($filteredArr);
