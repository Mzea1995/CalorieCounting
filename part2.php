<?php

$input =  file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');
$caloriesByElves = explode(PHP_EOL . PHP_EOL, $input);
$totalCaloriesByElves = [];
$maxCalories = 0;

foreach ($caloriesByElves as $caloriesByElf) {
    $totalCalories = array_sum(
        explode(
            PHP_EOL,
            $caloriesByElf
        )
    );

    $totalCaloriesByElves[] = $totalCalories;
}

rsort($totalCaloriesByElves);
$maxCalories = $totalCaloriesByElves[0] + $totalCaloriesByElves[1] + $totalCaloriesByElves[2];

echo $maxCalories;
