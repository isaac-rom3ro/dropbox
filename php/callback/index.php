<?php

function square(int $number): int {
    return $number * $number;
}

// Array map simple execute a function in each element inside our array
// and returns a new array with the result
$set = array_map("square", [1, 2, 3, 4, 5, 6]);

print_r($set);