<?php

// Array of elements
$array = ["Banana", "Apple", "Avocado"];

// Get each element in the array and use a separator pre defined in the function
// For example ["banana", "apple"] using a comma separator it's gonna be
// implode = banana,apple;
$implodeExample = implode(", ", $array);

echo $implodeExample;