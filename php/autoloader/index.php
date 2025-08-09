<?php
    spl_autoload_register("myAutoLoader"); #  Loading and linking portions of a program from storage automatically when needed
    # Needed a function

    function myAutoLoader($className) { # The class name will be the Object() Instantiated
        $path = "classes/"; # Path to files
        $extension = ".class.php"; # extension
        $fullPath = $path. $className. $extension; # Full path to call

        include_once $fullPath; # Include in our program those found classes
    }

    $person1 = new Person("Isaac", 20);
    echo $person1->getPerson();