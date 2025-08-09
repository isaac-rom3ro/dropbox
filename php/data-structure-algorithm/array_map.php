<?php

function callbackFunction(int $x) {
    return "$x";
}

$array = [1, 1, 1];

// array_map('function', 'array')
// function may contain the right parameters

$result_sum = array_map(callback: 'callbackFunction', array: $array);

print_r($result_sum);