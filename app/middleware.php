<?php

class middleware
{
    public function checklogin()
    {
        $url = $_GET['url'] ?? '';

        // Allow login page
        if (
            $url == 'auth/login'
            || $url == 'auth/logout'
        )
        {
            return;
        }

        // Require login for everything else
        if (!isset($_SESSION['username']))
        {
            header(
                'Location: /PMNM_68PM3_NhorkSopheakna_5001668/public/index.php?url=auth/login'
            );

            exit();
        }
    }
}