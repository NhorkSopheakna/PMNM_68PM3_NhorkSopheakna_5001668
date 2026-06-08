<?php

class SinhvienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::Connect();
    }

    public function getAllSinhvien()
    {
        $query = "SELECT * FROM sinhvien";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($hoten, $gioitinh, $mssv)
    {
        $query = "INSERT INTO sinhvien(ten, gioitinh, mssv)
                  VALUES(?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            $hoten,
            $gioitinh,
            $mssv
        ]);
    }
}