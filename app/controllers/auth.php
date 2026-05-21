<?php

session_start();

class auth {

    protected $user = [
        'admin' => '123456',
        'anna'  => '123456'
    ];

    // LOGIN
    public function login() {

        // Check submit form
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            // Check username and password
            if (
                isset($this->user[$username]) &&
                $this->user[$username] == $password
            ) {

                // Save session
                $_SESSION['username'] = $username;

                // Redirect home
                header('Location: /PMNM_68PM3_NhorkSopheakna_5001668/public');
                exit();

            } else {

                echo "<h3>Login Failed</h3>";
            }
        }

        // Show login page
        require_once __DIR__ . '/../views/home/login.php';
    }

    // LOGOUT
    public function logout() {

        session_destroy();

        header('Location: /PMNM_68PM3_NhorkSopheakna_5001668/auth/login');
        exit();
    }
}

?>