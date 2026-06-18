<h1>Danh sách lớp học</h1>

<br>

<a href="index.php?url=lophoc/create">
    + Thêm lớp học
</a>

<br><br>

<table border="1">

<tr>
    <th>Mã lớp</th>
    <th>Tên lớp</th>
    <th>Ghi chú</th>
    <th>Thao tác</th>
</tr>

<?php foreach($lophocs as $lop): ?>

<tr>

<td><?= $lop['malop'] ?></td>

<td><?= $lop['tenlop'] ?></td>

<td><?= $lop['ghichu'] ?></td>

<td>

<a
href="index.php?url=lophoc/edit/<?= $lop['malop'] ?>">
Sửa
</a>

|

<a
onclick="return confirm('Xóa lớp này?')"
href="index.php?url=lophoc/delete/<?= $lop['malop'] ?>">
Xóa
</a>

</td>

</tr>

<?php endforeach; ?>

</table>