<?php
    # Parent class
    class Animal {
        public function eat() {
            return "Eating";
        }
    }

    # Child class extends Parent's methods and attributes
    class Dog extends Animal {
        public function bark() {
            return "Woof";
        }
    }

    $dog = new Dog();

    # Now we are allowed to manipulate, use whatever methods and attributes that we want
    echo $dog->eat();

    echo PHP_EOL;

    echo $dog->bark();