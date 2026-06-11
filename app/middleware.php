<?php

class middleware
{
    public function checklogin()
    {
        if (!isset($_SESSION['username'])) {

            header(
                'Location: /PMNM_68PM3_NhorkSopheakna_5001668/public/index.php?url=home/login'
            );

            exit();
        }
    }
}