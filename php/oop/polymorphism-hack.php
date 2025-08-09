<?php
    class Math {
        # Method __call is used to get the name of method or attribute called after instantiate $object->call or ();
        # Args is the parameters paassed inside ()
        public function __call($name ,$args) {
            # We can check what method was called as string 
            # Making different actions for how many args were passed by!
            if($name == "sum") { 
                if(count($args) == 2) {
                    return $args[0] + $args[1];
                } else if(count($args) == 3) {
                    return $args[0] + $args[1] + $args[2];
                }
            }
        }
    }  

    # Instantiate
    $math = new Math();

    # Using a fictional method with different parameters
    echo  $math->sum(2, 2);
    echo PHP_EOL;
    echo $math->sum(2, 2, 2);