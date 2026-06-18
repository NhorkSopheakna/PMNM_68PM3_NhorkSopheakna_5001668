<?php

class lophocController extends Controller
{
    public function index()
    {
        $lophocModel = $this->model('LophocModel');

        $lophocs = $lophocModel->getAllLophoc();

        extract([
            'viewname' => 'lophoc/index',
            'lophocs' => $lophocs
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
            $malop = $_POST['malop'];
            $tenlop = $_POST['tenlop'];
            $ghichu = $_POST['ghichu'];

            $lophocModel = $this->model('LophocModel');

            $lophocModel->create(
                $malop,
                $tenlop,
                $ghichu
            );

            header('Location: index.php?url=lophoc');
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
            $malop = $_POST['malop'];
            $tenlop = $_POST['tenlop'];
            $ghichu = $_POST['ghichu'];

            $lophocModel = $this->model('LophocModel');

            $lophocModel->update(
                $malop,
                $tenlop,
                $ghichu
            );

            header('Location: index.php?url=lophoc');
        }
    }

    public function delete($malop)
    {
        $lophocModel = $this->model('LophocModel');

        $lophocModel->delete($malop);

        header('Location: index.php?url=lophoc');
    }
}