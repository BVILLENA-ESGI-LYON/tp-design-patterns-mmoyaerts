<?php

namespace App\Database;

use PDO;

class DbConnect {
    private static $instance;
    private $connection;

    private function __construct() {
        // $host = "localhost"; 
        // $username = "username"; 
        // $password = "password";
        // $database = "database"; 
        
        // $this->connection = new PDO($host, $username, $password);
        
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}