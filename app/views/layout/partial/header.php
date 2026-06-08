<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản Lý Sinh Viên</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            padding:0;
        }

        .header{
            background-color: red;
            color:white;
            padding:15px;
        }

        .menu{
            background:#f4f4f4;
            padding:10px;
        }

        .menu a{
            text-decoration:none;
            margin-right:15px;
            font-weight:bold;
        }

        .container{
            padding:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table, th, td{
            border:1px solid black;
        }

        th, td{
            padding:10px;
        }

        .btn{
            background:green;
            color:white;
            padding:8px 12px;
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class="header">
    <h2>Hệ Thống Quản Lý Sinh Viên</h2>
</div>

<div class="menu">
    <a href="index.php?url=home/index">Home</a>
    <a href="index.php?url=sinhvien">Sinh Viên</a>
    <a href="index.php?url=auth/logout">Logout</a>
</div>

<div class="container">