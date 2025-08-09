<?php
    class Person {
        public string $name;
        public int $age;

        # Gets called on the moment of object is instantiate
        public function __construct($name, $age) {
            $this->$name = $name;
            $this->age = $age;
        }

        # Gets called when a object is destroyed (OR) when the script finishes executing
        public function __destruct() {
            echo "Goodbye world!";
        }
    }

    $person = new Person(name:"Isaac", age:20);