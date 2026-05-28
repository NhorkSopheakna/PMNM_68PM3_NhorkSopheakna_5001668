<?php

require_once '../app/core/ConnectDB.php';

class SinhvienModel extends ConnectDB {

    public function getAll()
    {
        $sql = "SELECT * FROM sinhvien";

        $result = $this->conn->query($sql);

        $data = [];

        while($row = $result->fetch_assoc()) {

            $data[] = $row;
        }

        return $data;
    }
}

?>