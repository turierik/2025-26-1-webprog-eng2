<?php
    $numbers = [2, 5, -4, 0, 6, 8, 5, 7, 0];
    // help: array_filter, array_map
    // doc: php.net

    // 1.) filter the even numbers
    $even = array_filter($numbers, function($x){
        return $x % 2 == 0;
    });
    $even = array_filter($numbers, fn($x) => $x % 2 == 0);
    echo implode(", ", $even) . "<br>";

    // 2.) count the negative numbers
    $neg = count(array_filter($numbers, fn($x) => $x < 0));
    echo $neg . "<br>";

    // 3.) square all the numbers into a new array
    $squared = array_map(fn($x) => $x * $x, $numbers);
    echo implode(", ", $squared). "<br>";

    // 4.) find the largest number
    echo max($numbers) . "<br>";

    // 5.) calculate the sum of the array
    echo array_sum($numbers) . "<br>";
?>