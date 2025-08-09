<?php
    declare(strict_types=1);
    namespace App\Models;
    
    class Admin {
        private string $name;
        private int $age;

        public function __construct(string $name, int $age ) {
            $this->name = $name;
            $this->age = $age;
        }

        // Logic Methods
        public function isAdmin():bool {
            if($this->name == "ADMIN") {
                return true;
            }

            return false;
        }

        // Getters and Setters
        public function getName(): string
        {
                return $this->name;
        }
        public function setName(string $name): self
        {
                $this->name = $name;

                return $this;
        }
        public function getAge(): int
        {
                return $this->age;
        }
        public function setAge(int $age): self
        {
                $this->age = $age;

                return $this;
        }
    }
