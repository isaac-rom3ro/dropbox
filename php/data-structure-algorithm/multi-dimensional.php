<?php
    $multiArray = array(
        [], #( Column [] ) ( ["Row"] ) 
        []
    );

    // echo count($multiArray); # Count the quantity of columns

    for($column = 0; $column < count($multiArray); $column++) {
        for($row = 0; $row < 2; $row++) {
            $multiArray[$column][$row] = sprintf("[%d, %d]", $column, $row);
        }   
    }

    $totalElements = count($multiArray, COUNT_RECURSIVE) - count($multiArray);
    # Total Elements = (Total of Columns + Rows) - (Total of columns) 

    echo sprintf("Elements: %d\n", $totalElements);
    print_r($multiArray);