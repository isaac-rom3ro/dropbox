<?php
    # Manages data
    # Enforce Rules
    # Does not care about displayed or requested
    declare(strict_types=1);
    namespace App\Models;

    class Person {
        private string $name;
        private int $age;

        public function __construct(string $name, int $age) {
            $this->name = $name;
            $this->age = $age;
        }
        
        // Business Logic - Methods
        public function isAdult(): bool {
            if($this->age >= 18) {
                return true;
            }

            return false;
        }

        // Getters and Setters
        public function getName(): string {
                return $this->name;
        }
        public function setName(string $name): void {
                $this->name = $name;
        }
        public function getAge(): int {
                return $this->age;
        }
        public function setAge(int $age): void {
                $this->age = $age;
        }
    }
