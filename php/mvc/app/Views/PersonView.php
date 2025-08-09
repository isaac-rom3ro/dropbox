<?php
    # Does not modify data 
    # Just set how the data will be displayed, better use functions 
    
    declare(strict_types=1);
    namespace App\Views;
    use App\Models\Person;

    class PersonView {
        public function render(Person $person): string {
            $adultStatus = $person->isAdult()? "an adult": "a minor";
            return sprintf("Name: %s\nAge: %d\nStatus: %s", $person->getName(), $person->getAge(), $adultStatus);
        }
    }
