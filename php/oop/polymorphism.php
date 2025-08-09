<?php
    # Parent class
    class Animal {
        # Method that will be override!
        public function makeSound() {
            return "Some sound";
        }
    }

    # Child class
    class Cat extends Animal {
        # To override a method, just use the same name!
        public function makeSound() {
            return "Miau";
        }
    }

    $animal = new Animal();
    $cat = new Cat();

    echo $animal ->makeSound();
    echo PHP_EOL;
    echo $cat->makeSound();