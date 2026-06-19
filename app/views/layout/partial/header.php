<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Quản Lý Sinh Viên</title>

<style>

.right-area{
    display:flex;
    align-items:center;
    gap:15px;
}

.right-area select{
    padding:10px;
    border:1px solid #ddd;
    border-radius:6px;
}

.btn-add{
    background:#4caf50;
    color:white;
    padding:10px 20px;
    border-radius:6px;
    text-decoration:none;
    font-weight:500;
}

.btn-add:hover{
    opacity:.9;
}

body{
    font-family:Arial,sans-serif;
    margin:0;
    background:#f4f6f9;
}

/* HEADER */
.header{
    background:#0d6efd;
    color:white;
    padding:20px;
}

.menu{
    margin-top:10px;
}

.menu a{
    color:white;
    text-decoration:none;
    margin-right:20px;
}

.container{
    width:90%;
    margin:auto;
    background:white;
    padding:20px;
    min-height:600px;
}

/* TOP BAR */
.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.search-form{
    display:flex;
    gap:10px;
    align-items:center;
}

.search-form input,
.search-form select{
    padding:10px;
    border:1px solid #ddd;
    border-radius:6px;
}

/* BUTTONS */
.btn-add{
    background:#4caf50;
    color:white;
    padding:10px 20px;
    border-radius:6px;
    text-decoration:none;
}

.btn-search{
    background:#0d6efd;
    color:white;
    border:none;
    padding:10px 18px;
    border-radius:6px;
    cursor:pointer;
}

.btn-reset{
    border:1px solid #ccc;
    padding:10px 18px;
    border-radius:6px;
    text-decoration:none;
    color:black;
}

.btn-edit{
    background:#ffc107;
    color:black;
    padding:7px 12px;
    border-radius:5px;
    text-decoration:none;
    margin-right:5px;
}

.btn-delete{
    background:#dc3545;
    color:white;
    padding:7px 12px;
    border-radius:5px;
    text-decoration:none;
}

/* TABLE */
.table{
    width:100%;
    border-collapse:collapse;
}

.table th{
    background:#4f5560;
    color:white;
    padding:15px;
}

.table td{
    border-bottom:1px solid #eee;
    padding:15px;
}

.table tr:hover{
    background:#fafafa;
}

/* if table has no class */
table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#4f5560;
    color:white;
}

th,td{
    padding:15px;
    text-align:center;
    border-bottom:1px solid #eee;
}

/* BADGES */
.badge-count{
    background:#6c757d;
    color:white;
    padding:6px 12px;
    border-radius:10px;
}

.lop-badge{
    background:#4ea5ff;
    color:white;
    padding:5px 12px;
    border-radius:15px;
    font-size:13px;
}

/* SORT */
.sort-link{
    color:white;
    text-decoration:none;
}

/* PAGINATION */
.pagination{
    margin-top:25px;
    text-align:right;
}

.pagination a{
    padding:10px 15px;
    border:1px solid #0d6efd;
    color:#0d6efd;
    text-decoration:none;
    border-radius:5px;
    margin-left:5px;
}

.pagination a:hover{
    background:#0d6efd;
    color:white;
}

.active-page{
    background:#0d6efd;
    color:white !important;
}

/* RECORD INFO */
.record-info{
    margin-top:20px;
    color:#666;
}

/* FORM CARD */
.form-card{
    width:650px;
    margin:30px auto;
    background:white;
    border:1px solid #ddd;
    border-radius:8px;
    box-shadow:0 2px 5px rgba(0,0,0,.1);
}

.form-title{
    background:#f7d770;
    padding:15px;
    font-size:28px;
    font-weight:bold;
    border-bottom:1px solid #ddd;
}

.form-body{
    padding:20px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:bold;
}

.form-control{
    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:5px;
    font-size:16px;
    box-sizing:border-box;
}

textarea.form-control{
    height:120px;
}

.form-action{
    margin-top:25px;
}

.btn-save{
    background:#17a541;
    color:white;
    padding:12px 25px;
    border:none;
    border-radius:5px;
    font-size:18px;
    cursor:pointer;
}

.btn-cancel,
.btn-back{
    background:white;
    color:black;
    border:1px solid #bbb;
    padding:12px 25px;
    text-decoration:none;
    border-radius:5px;
    font-size:18px;
    margin-left:10px;
}
</style>


</head>

<body>

<div class="header">

<h1>HỆ THỐNG QUẢN LÝ SINH VIÊN</h1>

<div class="menu">

<a href="index.php?url=sinhvien">
Sinh viên
</a>

<a href="index.php?url=lophoc">
Lớp học
</a>

</div>

</div>

<div class="container">