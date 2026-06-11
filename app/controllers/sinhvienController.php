<?php

class sinhvienController extends Controller
{
    public function index()
    {
        $sinhvienModel = $this->model('SinhvienModel');

        $page = $_GET['page'] ?? 1;

        $limit = 3;

        $offset = ($page - 1) * $limit;

        $search = $_GET['search'] ?? '';

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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $hoten = $_POST['hoten'] ?? '';
            $gioitinh = $_POST['gioitinh'] ?? '';
            $mssv = $_POST['mssv'] ?? '';

            $sinhvienModel = $this->model('SinhvienModel');

            $result = $sinhvienModel->create(
                $hoten,
                $gioitinh,
                $mssv
            );

            if ($result) {
                header('Location: index.php?url=sinhvien');
                exit();
            }

            echo "Them moi sinh vien that bai";
        }
    }
}