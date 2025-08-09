<?php

$lambda = function() {
    return 'Hello';
};

echo gettype($lamda); // Object
echo gettype($lambda()); // string, because it actually run the function due -> ()