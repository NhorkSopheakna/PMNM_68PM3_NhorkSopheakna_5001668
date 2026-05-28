<?php

require_once '../app/core/Controller.php';

class sinhvienController extends Controller {

    public function index()
    {
        $model = $this->model('SinhvienModel');

        $data = $model->getAll();

        require_once '../app/views/sinhvien/index.php';
    }
}

?>