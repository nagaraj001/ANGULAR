<?php

class Connection extends PDO{
    protected $db;
    function __construct($db, $host = '127.0.0.1', $user = 'root', $password = '') {
        $this->db = new PDO('mysql:host=$host;dbname=$db', $user, $password);
    }
}
