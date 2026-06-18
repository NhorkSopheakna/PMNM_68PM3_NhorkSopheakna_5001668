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

    public function create($hoten,$gioitinh,$mssv,$malop)
    {
        $query = "INSERT INTO sinhvien(ten,gioitinh,mssv,malop)
                  VALUES(?,?,?,?)";

        $stmt = $this->conn->prepare($query);
        

        return $stmt->execute([
            $hoten,
            $gioitinh,
            $mssv
        ]);
    }


    public function search($keyword = '')
    {
        $query = "
            SELECT *
            FROM sinhvien sv
            LEFT JOIN lophoc lh
            ON sv.malop=lh.malop
        ";

        $stmt = $this->conn->prepare($query);

        $stmt->execute([
            "%$keyword%"
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function delete($id)
    {
        $sql =
        "DELETE FROM sinhvien
        WHERE stt=?";

        $stmt =
        $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }

    public function paging($limit = 5, $offset = 0, $search = '')
    {
        $query = "
            SELECT *
            FROM sinhvien
            WHERE mssv LIKE ?
            LIMIT $limit OFFSET $offset
        ";

        $stmt = $this->conn->prepare($query);

        $stmt->execute([
            "%$search%"
        ]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $countQuery = $this->conn->prepare(
            "SELECT COUNT(*) FROM sinhvien WHERE mssv LIKE ?"
        );

        $countQuery->execute([
            "%$search%"
        ]);

        $totalRecord = $countQuery->fetchColumn();

        $totalPage = ceil($totalRecord / $limit);

        return [
            'sinhviens' => $result,
            'totalPage' => $totalPage
        ];
    }

    public function findById($id)
    {
        $sql = "
            SELECT *
            FROM sinhvien
            WHERE stt=?
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update($id, $ten, $gioitinh, $mssv)
    {
        $sql = "
            UPDATE sinhvien
            SET ten=?,
                gioitinh=?,
                mssv=?
            WHERE stt=?
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $ten,
            $gioitinh,
            $mssv,
            $id
        ]);
    }

     
}