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
        $query = "SELECT * FROM lophoc";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($malop, $tenlop, $ghichu)
    {
        $query = "INSERT INTO lophoc(malop, tenlop, ghichu)
                  VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            $malop,
            $tenlop,
            $ghichu
        ]);
    }

    public function getLophocById($malop)
    {
        $query = "SELECT * FROM lophoc WHERE malop = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->execute([$malop]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($malop, $tenlop, $ghichu)
    {
        $query = "UPDATE lophoc
                  SET tenlop = ?, ghichu = ?
                  WHERE malop = ?";

        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
            $tenlop,
            $ghichu,
            $malop
        ]);
    }

    public function delete($malop)
    {
        $query = "DELETE FROM lophoc WHERE malop = ?";

        $stmt = $this->conn->prepare($query);

        return $stmt->execute([$malop]);
    }
}