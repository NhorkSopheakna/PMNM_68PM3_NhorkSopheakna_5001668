<h1>Sửa lớp học</h1>

<form
action="index.php?url=lophoc/update"
method="POST">

<input
type="hidden"
name="malop"
value="<?= $lophoc['malop'] ?>">

<label>Tên lớp</label>

<input
type="text"
name="tenlop"
value="<?= $lophoc['tenlop'] ?>">

<br><br>

<label>Ghi chú</label>

<input
type="text"
name="ghichu"
value="<?= $lophoc['ghichu'] ?>">

<br><br>

<button>
Cập nhật
</button>

</form>