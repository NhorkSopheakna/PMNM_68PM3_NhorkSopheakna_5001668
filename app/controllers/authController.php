<?php

class authController
{
    protected $user = [
        'admin' => '123456',
        'Nhork Sopheakna' => '123456'
    ];

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if (
                isset($this->user[$username]) &&
                $this->user[$username] == $password
            )
            {
                $_SESSION['username'] = $username;

                // Go directly to student management page
                header('Location: index.php?url=sinhvien');
                exit();
            }
            else
            {
                echo "<h3 style='color:red;text-align:center'>
                        Sai tên đăng nhập hoặc mật khẩu
                      </h3>";
            }
        }

        require_once '../app/views/home/login.php';
    }

    public function logout()
    {
        session_destroy();

        header('Location: index.php?url=auth/login');
        exit();
    }
}