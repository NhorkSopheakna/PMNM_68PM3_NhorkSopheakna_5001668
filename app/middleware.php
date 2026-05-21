<?php

session_start();

class middleware {

    public function checklogin() {

        if (!isset($_SESSION['username'])) {

            header('Location: /PMNM_68PM3_NhorkSopheakna_5001668/auth/login');
            exit();
        }
    }
}

?>