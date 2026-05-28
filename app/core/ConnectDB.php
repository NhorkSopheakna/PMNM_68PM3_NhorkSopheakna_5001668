<?php

class ConnectDB {

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            'localhost',
            'root',
            '',
            '68pm34'
        );

        if ($this->conn->connect_error) {

            die('Connect Failed');
        }
    }
}

?>