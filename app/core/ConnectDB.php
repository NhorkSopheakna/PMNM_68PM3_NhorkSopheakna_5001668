<?php

class ConnectDB
{
    private $host = "localhost";
    private $dbname = "68pm34";
    private $username = "root";
    private $password = "";

    public static function Connect()
    {
        $self = new self();

        try {

            $conn = new PDO(
                "mysql:host={$self->host};dbname={$self->dbname};charset=utf8",
                $self->username,
                $self->password
            );

            $conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $conn;

        } catch (PDOException $e) {

            die("Connection Error: " . $e->getMessage());
        }
    }
}