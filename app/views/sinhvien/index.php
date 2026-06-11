<h1>Danh Sách Sinh Viên</h1>

<br>

<div style="display:flex; justify-content:space-between; margin-bottom:0px;">
<a class="btn-add"
href="index.php?url=sinhvien/create">
    + Thêm mới
</a>

<form method="GET">


        <input
            type="hidden"
            name="url"
            value="sinhvien"
        >

        <input
            type="text"
            name="search"
            value="<?= $search ?>"
            placeholder="Nhập MSSV..."
            style="
                padding:8px;
                height:36px;
            "
        >

        <button
            type="submit"
            style="
                background:green;
                color:white;
                padding:8px 12px;
                border:none;
                cursor:pointer;
                height:36px;
            "
        >
            Tìm kiếm
        </button>

</form>
</div>

<br><br>

<table border="1" cellpadding="10">

    <tr>
        <th>STT</th>
        <th>Họ tên</th>
        <th>Giới tính</th>
        <th>MSSV</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach($sinhviens as $sv): ?>

    <tr>

        <td><?= $sv['stt'] ?></td>
        <td><?= $sv['ten'] ?></td>
        <td><?= $sv['gioitinh'] ?></td>
        <td><?= $sv['mssv'] ?></td>

        <td>

            <a
            href="index.php?url=sinhvien/edit/<?= $sv['stt'] ?>">
                Sửa
            </a>

            |

            <a
            href="index.php?url=sinhvien/delete/<?= $sv['stt'] ?>">
                Xóa
            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

<br>

<?php for($i = 1; $i <= $totalPage; $i++): ?>

    <a
    href="index.php?url=sinhvien&page=<?= $i ?>&search=<?= $search ?>">
        <?= $i ?>
    </a>

<?php endfor; ?>