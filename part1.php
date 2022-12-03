<?php

$input =  file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');
$caloriesByElves = explode(PHP_EOL . PHP_EOL, $input);
$maxCalories = 0;

foreach ($caloriesByElves as $caloriesByElf) {
    $totalCalories = array_sum(
        explode(
            PHP_EOL,
            $caloriesByElf
        )
    );

    $maxCalories = max($totalCalories, $maxCalories);
}

echo $maxCalories;
