<?php
    function divide(int $dividend, int $divisor):string {
        try { //always put the code that can throw an exception in a try catch block!
            if($divisor === 0) { //if trying dividing by 0
                throw new Exception("Error dividing by zero\n"); //Throw a new exception made by me, with a message 
            } 

            return $dividend / $divisor;
        } catch(Exception $exception) { //catch(exception) return the default message for that excpetion
            return $exception->getMessage();
        } finally { //This block is always run even if the catch has an exception
            echo "Treatment Exceptions\n";
        }
    }

    //Using the nameparameter for add values
    echo divide(dividend: 5, divisor: 0);