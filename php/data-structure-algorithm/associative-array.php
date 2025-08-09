<?php
    $personalInformations = [
        "name" => "Isaac",
        "age" => 20
    ];

    $fullSign = [
        "email" => "Isaac@gmail.com",
        "status" => true 
    ];

    # In case of multidimensional assoc (not used too much), to get an element or data inside assoc array
    # it's necessary to give the column number[key]
    // echo $informations[1]["name"];

    # Returns the keys inside the assoc array
    //$keys  = array_keys($informations);

    # Get values as keys above
    // $values = array_values($informations);

    # Get specific key based on what u passed as value
    // print_r(array_keys($personalInformations, "Isaac"));


    # in_array(value, array)
    // if(in_array("Isaac", $personalInformations)) {
        # array_merge(array1, array2); Merge two arrays into one
        # If a key already exists, it will get the last added value to that key!
        // $database = array_merge($personalInformations, $fullSign);
    //     print_r($database);
    // } else {
    //     echo "User not Found";
    // }