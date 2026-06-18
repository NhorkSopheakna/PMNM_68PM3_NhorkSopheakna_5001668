<h1>Cập nhật lớp học</h1>

<form
action="index.php?url=lophoc/update"
method="POST">

    <p>Mã lớp</p>

    <input
    type="text"
    name="malop"
    value="<?= $lophoc['malop'] ?>"
    readonly>

    <br><br>

    <p>Tên lớp</p>

    <input
    type="text"
    name="tenlop"
    value="<?= $lophoc['tenlop'] ?>">

    <br><br>

    <p>Ghi chú</p>

    <input
    type="text"
    name="ghichu"
    value="<?= $lophoc['ghichu'] ?>">

    <br><br>

    <button type="submit">
        Cập nhật
    </button>

</form>
