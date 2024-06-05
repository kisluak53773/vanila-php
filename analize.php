<?php

declare(strict_types=1);

$sales = [
    ["id" => 1, "product" => "coffe","suplier" => "Atlant" ,"in_stock" => 200, "price" => 15, "sold" => 20 ],
    ["id" => 2, "product" => "tea","suplier" => "Atlant" ,"in_stock" => 200, "price" => 15, "sold" => 25 ],
    ["id" => 3, "product" => "milk","suplier" => "Food" ,"in_stock" => 200, "price" => 15, "sold" => 21 ],
    ["id" => 4, "product" => "meat","suplier" => "Food" ,"in_stock" => 200, "price" => 15, "sold" => 2 ],
    ["id" => 5, "product" => "suggar","suplier" => "Food" ,"in_stock" => 200, "price" => 15, "sold" => 7 ],
    ["id" => 6, "product" => "papper","suplier" => "Food" ,"in_stock" => 200, "price" => 15, "sold" => 15 ],
    ["id" => 7, "product" => "pencil","suplier" => "Summers" ,"in_stock" => 200, "price" => 15, "sold" => 28 ],
    ["id" => 8, "product" => "pen","suplier" => "Summers" ,"in_stock" => 200, "price" => 15, "sold" => 22 ],
    ["id" => 9, "product" => "note","suplier" => "Summers" ,"in_stock" => 200, "price" => 15, "sold" => 1 ],
    ["id" => 10, "product" => "eraser","suplier" => "Summers" ,"in_stock" => 200, "price" => 15, "sold" => 7 ],
    ["id" => 11, "product" => "book","suplier" => "Summers" ,"in_stock" => 200, "price" => 15, "sold" => 8 ],
];

$summersArray = array_filter($sales, fn ($item) => $item["suplier"] === "Summers");

$sold = array_reduce($sales, fn ($acc, $item) => $acc + $item["sold"], 0);

var_dump($summersArray);

echo PHP_EOL;

echo $sold . PHP_EOL;
