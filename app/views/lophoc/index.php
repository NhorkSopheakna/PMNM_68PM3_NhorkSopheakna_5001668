<h1>Danh sách lớp học</h1>

<br>

<a href="index.php?url=lophoc/create">
    + Thêm lớp học
</a>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>STT</th>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Ghi chú</th>
        <th>Thao tác</th>
    </tr>

    <?php
    $stt = 1;

    foreach($lophocs as $lop):
    ?>

    <tr>

        <td><?= $stt++ ?></td>

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
                onclick="return confirm('Bạn có chắc muốn xóa?')"
                href="index.php?url=lophoc/delete/<?= $lop['malop'] ?>">
                Xóa
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>