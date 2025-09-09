<?php

class connect {
    private $host = "localhost";
    private $username = "adminphp";
    private $password = "password";
    private $database = "myfarm";

    

    public function conn() {
            return new mysqli($this->host, $this->username, $this->password, $this->database);
        }
    }

?>