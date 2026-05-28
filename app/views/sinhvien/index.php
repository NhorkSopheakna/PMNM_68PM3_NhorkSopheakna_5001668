<!DOCTYPE html>
<html>
<head>
    <title>Danh Sach Sinh Vien</title>
</head>
<body>

    <h1>Danh Sach Sinh Vien</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Gioi Tinh</th>
            <th>MSSV</th>
        </tr>

        <?php foreach($data as $sv): ?>

        <tr>
            <td><?= $sv['stt'] ?></td>
            <td><?= $sv['ten'] ?></td>
            <td><?= $sv['gioitinh'] ?></td>
            <td><?= $sv['mssv'] ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>