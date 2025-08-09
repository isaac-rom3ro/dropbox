<?php
    # Numerical array
    $box = ["Max Stell", "Ball", "My Favorite Toy"];
    // echo count($box); # -> Return the numbers of elements attended 

    #Can be used without take -1 if the condition is < only 
    for($i = 0; $i < count($box); $i++) {
        echo $box[$i] . " ";
    }
    
    echo PHP_EOL;
    
    array_push($box, "Barbie"); # Add element into array
    
    print_r($box); # Better way to show the array

    array_pop($box); # Remove the last item

    echo PHP_EOL;

    print_r($box);
    
    unset($box[0]); # Remove specific line given by the index

    print_r($box);