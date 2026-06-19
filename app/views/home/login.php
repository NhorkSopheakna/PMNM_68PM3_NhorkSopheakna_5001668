<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Đăng nhập hệ thống</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#f4f6f9;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-card{
    width:420px;
    background:white;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 5px 20px rgba(0,0,0,.15);
}

.card-header{
    background:#0d6efd;
    color:white;
    text-align:center;
    padding:25px;
}

.card-header h1{
    font-size:30px;
    margin-bottom:8px;
}

.card-header p{
    font-size:15px;
    opacity:.9;
}

.card-body{
    padding:35px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
    color:#444;
}

.form-control{
    width:100%;
    padding:13px;
    border:1px solid #ddd;
    border-radius:6px;
    font-size:15px;
}

.form-control:focus{
    outline:none;
    border-color:#0d6efd;
}

.btn-login{
    width:100%;
    background:#0d6efd;
    color:white;
    border:none;
    padding:14px;
    border-radius:6px;
    font-size:17px;
    cursor:pointer;
    transition:.3s;
}

.btn-login:hover{
    background:#0b5ed7;
}

.info{
    margin-top:25px;
    text-align:center;
    color:#666;
    font-size:14px;
}

.demo-account{
    margin-top:10px;
    background:#f8f9fa;
    padding:12px;
    border-radius:6px;
    line-height:28px;
}

.error{
    background:#ffe5e5;
    color:red;
    padding:10px;
    border-radius:5px;
    margin-bottom:20px;
    text-align:center;
}

</style>

</head>

<body>

<div class="login-card">

    <div class="card-header">

        <h1>ĐĂNG NHẬP</h1>

        <p>Hệ thống quản lý sinh viên</p>

    </div>

    <div class="card-body">

        <?php if(isset($error)): ?>

        <div class="error">

            <?= $error ?>

        </div>

        <?php endif; ?>

        <form method="POST">

            <div class="form-group">

                <label>Tên đăng nhập</label>

                <input
                    class="form-control"
                    type="text"
                    name="username"
                    placeholder="Nhập tên đăng nhập"
                    required>

            </div>

            <div class="form-group">

                <label>Mật khẩu</label>

                <input
                    class="form-control"
                    type="password"
                    name="password"
                    placeholder="Nhập mật khẩu"
                    required>

            </div>

            <button class="btn-login" type="submit">

                Đăng nhập

            </button>

        </form>

        <div class="info">

            Tài khoản thử nghiệm

            <div class="demo-account">

                <b>admin</b> / 123456

                <br>

                <b>Nhork Sopheakna</b> / 123456

            </div>

        </div>

    </div>

</div>

</body>
</html>