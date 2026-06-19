<?php

class homeController
{
    public function index()
    {
        header(
            'Location: /PMNM_68PM3_NhorkSopheakna_5001668/public/index.php?url=sinhvien'
        );
        exit();
    }
}