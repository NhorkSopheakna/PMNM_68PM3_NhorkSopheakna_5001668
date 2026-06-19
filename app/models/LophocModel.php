<?php

class LophocModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::Connect();
    }

    // dùng cho combobox bên sinh viên
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


    public function paging(
        $limit = 5,
        $offset = 0,
        $search = '',
        $sort = ''
    )
    {

        $sql = "
            SELECT *
            FROM lophoc
            WHERE
                malop LIKE ?
                OR tenlop LIKE ?
        ";

        if ($sort == 'malop')
        {
            $sql .= " ORDER BY malop ";
        }

        if ($sort == 'tenlop')
        {
            $sql .= " ORDER BY tenlop ";
        }

        $sql .= " LIMIT $offset,$limit";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            "%$search%",
            "%$search%"
        ]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        $countSql = "
            SELECT COUNT(*)
            FROM lophoc
            WHERE
                malop LIKE ?
                OR tenlop LIKE ?
        ";

        $countStmt = $this->conn->prepare($countSql);

        $countStmt->execute([
            "%$search%",
            "%$search%"
        ]);

        $totalRecord = $countStmt->fetchColumn();

        return [
            'lophocs' => $result,
            'totalPage' => ceil($totalRecord / $limit),
            'totalRecord' => $totalRecord
        ];
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
            SET
                tenlop=?,
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

        return $stmt->execute([$malop]);
    }

}