<h1>Sửa Sinh Viên</h1>

<form action="index.php?url=sinhvien/update" method="POST">

    <input
        type="hidden"
        name="id"
        value="<?= $sinhvien['stt'] ?>"
    >

    <label>Họ tên</label>
    <br>

    <input
        type="text"
        name="hoten"
        value="<?= $sinhvien['ten'] ?>"
    >

    <br><br>

    <label>Giới tính</label>
    <br>

    <input
        type="text"
        name="gioitinh"
        value="<?= $sinhvien['gioitinh'] ?>"
    >

    <br><br>

    <label>MSSV</label>
    <br>

    <input
        type="text"
        name="mssv"
        value="<?= $sinhvien['mssv'] ?>"
    >

    <br><br>

    <button type="submit">
        Cập nhật
    </button>

</form>