<?php

class Database {

    private $db = null;

    public function __construct($host, $db, $username, $pass) {
        $this->db = new mysqli($host, $db, $username, $pass);
    }
    
    public function login($name, $pass) {
        if ($result = $this->db->query("SELECT * FROM users"))
        {
            echo 'Returned rows are: '. $result->num_rows;
            $result->free_result();
        }
    }
}
