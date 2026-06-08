<?php

class middleware
{
    public function checklogin()
    {
        if (!isset($_SESSION['username'])) {

            header('Location: /home/login');
            exit();
        }
    }
}