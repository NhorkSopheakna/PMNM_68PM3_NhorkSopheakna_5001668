<?php

class sinhvienController extends Controller
{
    public function index()
    {
        $sinhvienModel = $this->model('SinhvienModel');
        $lophocModel = $this->model('LophocModel');

        $page = $_GET['page'] ?? 1;
        $pageSize = $_GET['pageSize'] ?? 10;
        $search = $_GET['search'] ?? '';
        $malop = $_GET['malop'] ?? '';
        $sort = $_GET['sort'] ?? '';

        $limit = $pageSize;
        $offset = ($page - 1) * $limit;

        $pagingData = $sinhvienModel->paging(
            $limit,
            $offset,
            $search,
            $malop,
            $sort
        );

        $lophocs = $lophocModel->getAllLophoc();

        extract([
            'viewname' => 'sinhvien/index',
            'sinhviens' => $pagingData['sinhviens'],
            'totalPage' => $pagingData['totalPage'],
            'totalRecord' => $pagingData['totalRecord'],
            'search' => $search,
            'pageSize' => $pageSize,
            'malop' => $malop,
            'sort' => $sort,
            'page' => $page,
            'lophocs' => $lophocs
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }

    public function create()
    {
        $lophocModel = $this->model('LophocModel');

        $lophocs = $lophocModel->getAllLophoc();

        extract([
            'viewname' => 'sinhvien/create',
            'lophocs' => $lophocs
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $sinhvienModel = $this->model('SinhvienModel');

            $sinhvienModel->create(
                $_POST['hoten'],
                $_POST['gioitinh'],
                $_POST['mssv'],
                $_POST['malop']
            );

            header('Location:index.php?url=sinhvien');
        }
    }

    public function edit($id)
    {
        $sinhvienModel = $this->model('SinhvienModel');
        $lophocModel = $this->model('LophocModel');

        $sinhvien = $sinhvienModel->findById($id);

        $lophocs = $lophocModel->getAllLophoc();

        extract([
            'viewname' => 'sinhvien/edit',
            'sinhvien' => $sinhvien,
            'lophocs' => $lophocs
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $sinhvienModel = $this->model('SinhvienModel');

            $sinhvienModel->update(
                $_POST['id'],
                $_POST['hoten'],
                $_POST['gioitinh'],
                $_POST['mssv'],
                $_POST['malop']
            );

            header('Location:index.php?url=sinhvien');
        }
    }

    public function delete($id)
    {
        $sinhvienModel = $this->model('SinhvienModel');

        $sinhvienModel->delete($id);

        header('Location:index.php?url=sinhvien');
    }
}