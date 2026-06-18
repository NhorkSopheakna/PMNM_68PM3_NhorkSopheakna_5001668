<?php

class LophocModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::Connect();
    }

    public function getAllLophoc()
    {
        $sql = "SELECT * FROM lophoc";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($malop, $tenlop, $ghichu)
    {
        $sql = "
            INSERT INTO lophoc(malop,tenlop,ghichu)
            VALUES(?,?,?)
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $malop,
            $tenlop,
            $ghichu
        ]);
    }

    public function findById($malop)
    {
        $sql = "
            SELECT *
            FROM lophoc
            WHERE malop=?
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$malop]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($malop, $tenlop, $ghichu)
    {
        $sql = "
            UPDATE lophoc
            SET tenlop=?,
                ghichu=?
            WHERE malop=?
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $tenlop,
            $ghichu,
            $malop
        ]);
    }

    public function delete($malop)
    {
        $sql = "
            DELETE FROM lophoc
            WHERE malop=?
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $malop
        ]);
    }
}