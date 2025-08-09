<?php
    declare(strict_types = 1); #Hey! If someone passes the wrong type into a function or method, don’t try to convert it — just throw a TypeError.

    namespace Payment\Stripe; #Needs to go after the declare and before any class of function

    #Maybe cause mess with built-in functions in order that
    #Need to import or \Class() (\) -> means to search in global folder
    #built-in function and constants dont needs

    use DateTime;

    class Transaction {
        public function __construct() {
            // var_dump(new DateTime());
            // echo explode(',', "Hello,World");
        }
    }