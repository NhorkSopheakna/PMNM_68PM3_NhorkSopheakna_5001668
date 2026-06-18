<?php

class lophocController extends Controller
{
    public function index()
    {
        $lophocModel = $this->model('LophocModel');

        $lophocs = $lophocModel->getAllLophoc();

        $this->view('layout/masterlayout', [
            'viewname' => 'lophoc/index',
            'lophocs' => $lophocs
        ]);
    }

    public function create()
    {
        $this->view('layout/masterlayout', [
            'viewname' => 'lophoc/create'
        ]);
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $malop = $_POST['malop'];
            $tenlop = $_POST['tenlop'];
            $ghichu = $_POST['ghichu'];

            $lophocModel = $this->model('LophocModel');

            $lophocModel->create(
                $malop,
                $tenlop,
                $ghichu
            );

            header(
                'Location: /PMNM_68PM3_NhorkSopheakna_5001668/public/index.php?url=lophoc'
            );
        }
    }

    public function edit($malop)
    {
        $lophocModel = $this->model('LophocModel');

        $lophoc = $lophocModel->getLophocById($malop);

        $this->view('layout/masterlayout', [
            'viewname' => 'lophoc/edit',
            'lophoc' => $lophoc
        ]);
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $malop = $_POST['malop'];
            $tenlop = $_POST['tenlop'];
            $ghichu = $_POST['ghichu'];

            $lophocModel = $this->model('LophocModel');

            $lophocModel->update(
                $malop,
                $tenlop,
                $ghichu
            );

            header(
                'Location: /PMNM_68PM3_NhorkSopheakna_5001668/public/index.php?url=lophoc'
            );
        }
    }

    public function delete($malop)
    {
        $lophocModel = $this->model('LophocModel');

        $lophocModel->delete($malop);

        header(
            'Location: /PMNM_68PM3_NhorkSopheakna_5001668/public/index.php?url=lophoc'
        );
    }
}