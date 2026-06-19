<?php

class SinhvienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = ConnectDB::Connect();
    }

    public function create($hoten,$gioitinh,$mssv,$malop)
    {
        $sql = "
            INSERT INTO sinhvien(ten,gioitinh,mssv,malop)
            VALUES(?,?,?,?)
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $hoten,
            $gioitinh,
            $mssv,
            $malop
        ]);
    }

    public function paging($limit=10,$offset=0,$search='',$malop='',$sort='')
    {
        $sql = "
            SELECT sv.*,lh.tenlop
            FROM sinhvien sv
            LEFT JOIN lophoc lh
            ON sv.malop=lh.malop
            WHERE (
                sv.mssv LIKE ?
                OR sv.ten LIKE ?
                OR lh.tenlop LIKE ?
            )
        ";

        if($malop!='')
        {
            $sql .= " AND sv.malop='$malop' ";
        }

        if($sort=='mssv')
        {
            $sql .= " ORDER BY sv.mssv ";
        }

        if($sort=='hoten')
        {
            $sql .= " ORDER BY sv.ten ";
        }

        $sql .= " LIMIT $offset,$limit ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            "%$search%",
            "%$search%",
            "%$search%"
        ]);

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $countSql = "
            SELECT COUNT(*)
            FROM sinhvien sv
            LEFT JOIN lophoc lh
            ON sv.malop=lh.malop
            WHERE (
                sv.mssv LIKE ?
                OR sv.ten LIKE ?
                OR lh.tenlop LIKE ?
            )
        ";

        $countStmt = $this->conn->prepare($countSql);

        $countStmt->execute([
            "%$search%",
            "%$search%",
            "%$search%"
        ]);

        $totalRecord = $countStmt->fetchColumn();

        return [
            'sinhviens'=>$result,
            'totalPage'=>ceil($totalRecord/$limit),
            'totalRecord'=>$totalRecord
        ];
    }

    public function findById($id)
    {
        $sql = "SELECT * FROM sinhvien WHERE stt=?";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$ten,$gioitinh,$mssv,$malop)
    {
        $sql = "
            UPDATE sinhvien
            SET ten=?,
                gioitinh=?,
                mssv=?,
                malop=?
            WHERE stt=?
        ";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            $ten,
            $gioitinh,
            $mssv,
            $malop,
            $id
        ]);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM sinhvien WHERE stt=?";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([$id]);
    }
}