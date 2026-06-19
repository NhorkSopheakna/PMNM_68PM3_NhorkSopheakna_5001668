<?php

class lophocController extends Controller
{

    public function index()
    {
        $lophocModel = $this->model('LophocModel');

        $page = $_GET['page'] ?? 1;

        $pageSize = $_GET['pageSize'] ?? 5;

        $search = $_GET['search'] ?? '';

        $sort = $_GET['sort'] ?? '';

        $limit = $pageSize;

        $offset = ($page - 1) * $limit;


        $pagingData = $lophocModel->paging(
            $limit,
            $offset,
            $search,
            $sort
        );


        extract([

            'viewname' => 'lophoc/index',

            'lophocs' => $pagingData['lophocs'],

            'totalPage' => $pagingData['totalPage'],

            'totalRecord' => $pagingData['totalRecord'],

            'page' => $page,

            'pageSize' => $pageSize,

            'search' => $search,

            'sort' => $sort

        ]);

        require_once '../app/views/layout/masterlayout.php';
    }



    public function create()
    {
        extract([
            'viewname' => 'lophoc/create'
        ]);

        require_once '../app/views/layout/masterlayout.php';
    }



    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $lophocModel = $this->model('LophocModel');

            $lophocModel->create(

                $_POST['malop'],

                $_POST['tenlop'],

                $_POST['ghichu']

            );

            header('Location:index.php?url=lophoc');
        }
    }



    public function edit($malop)
    {
        $lophocModel = $this->model('LophocModel');

        $lophoc = $lophocModel->findById($malop);

        extract([

            'viewname' => 'lophoc/edit',

            'lophoc' => $lophoc

        ]);

        require_once '../app/views/layout/masterlayout.php';
    }



    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $lophocModel = $this->model('LophocModel');

            $lophocModel->update(

                $_POST['malop'],

                $_POST['tenlop'],

                $_POST['ghichu']

            );

            header('Location:index.php?url=lophoc');
        }
    }



    public function delete($malop)
    {
        $lophocModel = $this->model('LophocModel');

        $lophocModel->delete($malop);

        header('Location:index.php?url=lophoc');
    }

}