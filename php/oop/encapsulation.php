<?php
    class User {
        private string $password;

        public function setPassword(string $password): string {
            $this->password = password_hash($password, PASSWORD_BCRYPT);

            return $this->password;
        }
    }

    $user = new User();
    # Cannot access private property
    // $user->password = "Isaac";

    # Correct way
    echo $user->setPassword(password: "12345");
