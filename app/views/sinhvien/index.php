<h1>Danh Sách Sinh Viên</h1>

<div style="display:flex;justify-content:space-between;align-items:center;">

    <a
    class="btn-add"
    href="index.php?url=sinhvien/create">
        + Thêm mới
    </a>

    <form>

        <input type="text"
        name="search">

        <select name="malop">

        <option value="">
        --- Tất cả lớp ---
        </option>

        </select>

        <button>Tìm kiếm</button>

        <a>Đặt lại</a>

    </form>

</div>

<br>
<br>

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
        class="btn-edit"
        href="index.php?url=sinhvien/edit/<?= $sv['stt'] ?>">
            Sửa
        </a>

        <a
        class="btn-delete"
        href="index.php?url=sinhvien/delete/<?= $sv['stt'] ?>"
        onclick="return confirm('Xóa sinh viên này?')">
            Xóa
        </a>

    </td>

    </tr>

    <?php endforeach; ?>

</table>

<br>

<div class="pagination">

<?php for($i=1;$i<=$totalPage;$i++): ?>

    <a
    href="index.php?url=sinhvien&page=<?= $i ?>&search=<?= $search ?>">
        <?= $i ?>
    </a>

<?php endfor; ?>

</div>