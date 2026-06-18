<?php

class sinhvienController extends Controller
{
    public function index()
    {
        $sinhvienModel = $this->model('SinhvienModel');

        $page = $_GET['page'] ?? 1;

        $pageSize = $_GET['pageSize'] ?? 10;

        $search = $_GET['search'] ?? '';

        $limit = $pageSize;

        $offset = ($page - 1) * $limit;

        $pagingData = $sinhvienModel->paging(
            $limit,
            $offset,
            $search
        );

        extract([
            'viewname' => 'sinhvien/index',
            'sinhviens' => $pagingData['sinhviens'],
            'totalPage' => $pagingData['totalPage'],
            'search' => $search
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }

    public function create()
    {
        extract([
            'viewname' => 'sinhvien/create'
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $hoten = $_POST['hoten'] ?? '';
            $gioitinh = $_POST['gioitinh'] ?? '';
            $mssv = $_POST['mssv'] ?? '';
            $malop = $_POST['malop'] ?? '';

            $sinhvienModel = $this->model('SinhvienModel');

            $result = $sinhvienModel->create(
                $hoten,
                $gioitinh,
                $mssv,
                $malop
            );

            if ($result)
            {
                header('Location: index.php?url=sinhvien');
                exit();
            }

            echo "Them moi sinh vien that bai";
        }
    }

    public function delete($id)
    {
        $sinhvienModel = $this->model('SinhvienModel');

        $sinhvienModel->delete($id);

        header('Location: index.php?url=sinhvien');
        exit();
    }

    public function edit($id)
    {
        $sinhvienModel = $this->model('SinhvienModel');

        $sinhvien = $sinhvienModel->findById($id);

        extract([
            'viewname' => 'sinhvien/edit',
            'sinhvien' => $sinhvien
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $id = $_POST['id'];
            $ten = $_POST['hoten'];
            $gioitinh = $_POST['gioitinh'];
            $mssv = $_POST['mssv'];

            $sinhvienModel = $this->model('SinhvienModel');

            $sinhvienModel->update(
                $id,
                $ten,
                $gioitinh,
                $mssv
            );

            header('Location: index.php?url=sinhvien');
            exit();
        }
    }
}