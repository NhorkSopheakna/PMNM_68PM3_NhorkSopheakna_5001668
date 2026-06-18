<h1>Thêm Sinh Viên</h1>

<form action="index.php?url=sinhvien/store" method="post">

    <label>Mã lớp</label>
    <select name="malop">

    <?php foreach($lophocs as $lop): ?>

    <option value="<?= $lop['malop'] ?>">
        <?= $lop['tenlop'] ?>
    </option>

    <?php endforeach; ?>

    </select>

    <p>Họ Tên</p>
    <input type="text" name="hoten">

    <p>Giới Tính</p>
    <input type="text" name="gioitinh">

    <p>MSSV</p>
    <input type="text" name="mssv">

    <br><br>

    <button type="submit">
        Thêm Mới
    </button>

</form>