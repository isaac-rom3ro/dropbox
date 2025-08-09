<?php
    class Connection {
        private string $host;
        private string $databaseName;
        private string $charset;
        private string $user;
        private string $password;
        private ?PDO $conn = null;

        public function __construct($host, $databaseName, $charset, $user, $password){
            $this->host = $host;
            $this->databaseName = $databaseName;
            $this->charset = $charset;
            $this->user = $user;
            $this->password = $password;
        }

        public function connection() {
            try {
                if(!isset($this->conn)) {
                    $this->conn = new PDO("mysql:host={$this->host};dbname={$this->databaseName};charset={$this->charset}", $this->user, $this->password);
                }
            } catch(PDOException $e) {
                die("Connection failed! = {$e->getMessage()}");
            }
            
            return $this->conn;
        }
    }

    $conn = new Connection(host: "localhost", databaseName:"sys", charset:"utf8mb4", user:"root", password:"");
    var_dump($conn->connection());