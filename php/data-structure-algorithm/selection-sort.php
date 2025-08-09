<?php
    $startTime = microtime(true);

    $array = [9, 1, 8, 2, 7, 3, 6, 4, 5];
    echo count($array);

    $minimum = 0;
    $temporaryVariable = 0;

    print_r($array);
    
    for($i = 0; $i < count($array) - 1; $i++) {
        $minimum = $i;
        
        for($j = $i + 1; $j < count($array); $j++) {
            if($array[$minimum] > $array[$j]) {
                $minimum = $j;
            }
        }
        
        $temporaryVariable = $array[$i];
        $array[$i] = $array[$minimum];
        $array[$minimum] = $temporaryVariable;
    }

    print_r($array);

    $endtime = microtime(true);

    $executionTime = $endtime - $startTime;

    echo "\n ". $executionTime;