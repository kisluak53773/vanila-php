<?php

declare(strict_types=1);

$arr = ["name" => "Jhon", "age" => 22];

$newArr = array_flip($arr);

var_dump($newArr);