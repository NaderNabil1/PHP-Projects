<?php

    class Database {
        
        private $servername;
        private $username;
        private $password;
        private $dbname;
        
        public function connect () {
            
            $this->servername = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->dbname = "products";
            
            $conn = new \mysqli ($this->servername, $this->username, $this->password, $this->dbname);
            
            if ($conn->connect_error) {
                
            die ("Connection failed: " . $conn->connect_error);
                
            } else {

                return $conn;

            }
            
        }

    }