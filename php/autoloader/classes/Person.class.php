<?php
    declare(strict_types = 1);

    class Person {
        public string $name;
        public int $age;

        public function __construct(string $name,int  $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getPerson():string {
            $person = sprintf("%s is %d years old", $this->name, $this->age);

            return $person;
        }
    }