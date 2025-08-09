<?php
    $startTime = microtime(true); # Get the current time of execution

    $array = [9, 1, 8, 2, 7, 3, 6, 4, 5];
    // echo $array[count($array) - 1]; # Get lenght to be run by a index

    print_r($array);

    # Bubble Sort 
    for($i = 0; $i < count($array) - 1; $i++) { # index $i = will run each element presented
        # For each element already ran by $i, it's no longer necessary to run it again
        # So we can subtract from further comparations
        for($j = 0; $j < count($array) - 1 - $i; $j++) { # index $j = will be responsible as comparations 
            if($array[$j] > $array[$j+1]) { # If the actual position is greater than next position
                # Swap values
                $temporaryVariable = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temporaryVariable;
            }
        }
    }

    print_r($array);

    $endTime = microtime(true); # Get the current time of end execution

    $executionTime = $endTime - $startTime; # Provide the difference between those two times = execution time

    echo PHP_EOL;
    echo $executionTime;