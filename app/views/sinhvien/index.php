<h1>Danh Sách Sinh Viên</h1>

<br>

<a class="btn" href="index.php?url=sinhvien/create">
    Thêm Sinh Viên
</a>

<br><br>

<table>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Giới Tính</th>
        <th>MSSV</th>
    </tr>

    <?php foreach($sinhviens as $sv): ?>

    <tr>
        <td><?= $sv['stt'] ?></td>
        <td><?= $sv['ten'] ?></td>
        <td><?= $sv['gioitinh'] ?></td>
        <td><?= $sv['mssv'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>