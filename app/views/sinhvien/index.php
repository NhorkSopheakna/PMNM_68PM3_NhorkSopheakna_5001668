<h1>
    Danh sách sinh viên
    <span class="badge-count">
        <?= $totalRecord ?>
    </span>
</h1>

<div class="top-bar">

    <form class="search-form">

        <input
            type="hidden"
            name="url"
            value="sinhvien">

        <input
            type="text"
            name="search"
            placeholder="Tìm MSSV, họ tên..."
            value="<?= $search ?>">

        <select name="malop">

            <option value="">
                -- Tất cả lớp --
            </option>

            <?php foreach($lophocs as $lop): ?>

            <option
                value="<?= $lop['malop'] ?>"
                <?= ($malop == $lop['malop']) ? 'selected' : '' ?>>

                <?= $lop['tenlop'] ?>

            </option>

            <?php endforeach; ?>

        </select>

        <button class="btn-search">
            Tìm kiếm
        </button>

        <a
            class="btn-reset"
            href="index.php?url=sinhvien">

            Đặt lại

        </a>

    </form>



    <div class="right-area">

        <div class="page-size">

            Hiển thị:

            <select
                onchange="
                location.href='index.php?url=sinhvien&pageSize='+this.value
                +'&search=<?= $search ?>'
                +'&malop=<?= $malop ?>'
                +'&sort=<?= $sort ?>'
                ">

                <option value="5"
                <?= ($pageSize == 5) ? 'selected' : '' ?>>
                    5
                </option>

                <option value="10"
                <?= ($pageSize == 10) ? 'selected' : '' ?>>
                    10
                </option>

                <option value="20"
                <?= ($pageSize == 20) ? 'selected' : '' ?>>
                    20
                </option>

            </select>

        </div>



        <a
            class="btn-add"
            href="index.php?url=sinhvien/create">

            + Thêm sinh viên

        </a>

    </div>

</div>

<br>

<table class="table">

    <tr>

        <th>STT</th>

        <th>

            <a
            class="sort-link"
            href="index.php?url=sinhvien
            &search=<?= $search ?>
            &malop=<?= $malop ?>
            &sort=mssv
            &pageSize=<?= $pageSize ?>">

                MSSV ▲

            </a>

        </th>

        <th>

            <a
            class="sort-link"
            href="index.php?url=sinhvien
            &search=<?= $search ?>
            &malop=<?= $malop ?>
            &sort=hoten
            &pageSize=<?= $pageSize ?>">

                Họ tên ▲

            </a>

        </th>

        <th>Giới tính</th>

        <th>Lớp học</th>

        <th>Thao tác</th>

    </tr>

    <?php foreach($sinhviens as $sv): ?>

    <tr>

        <td>
            <?= $sv['stt'] ?>
        </td>

        <td>
            <?= $sv['mssv'] ?>
        </td>

        <td>
            <?= $sv['ten'] ?>
        </td>

        <td>
            <?= $sv['gioitinh'] ?>
        </td>

        <td>

            <span class="lop-badge">

                <?= $sv['tenlop'] ?>

            </span>

        </td>

        <td>

            <a
            class="btn-edit"
            href="index.php?url=sinhvien/edit/<?= $sv['stt'] ?>">

                Sửa

            </a>

            <a
            class="btn-delete"
            onclick="return confirm('Xóa sinh viên này?')"
            href="index.php?url=sinhvien/delete/<?= $sv['stt'] ?>">

                Xóa

            </a>

        </td>

    </tr>

    <?php endforeach; ?>

</table>

<?php
$from = ($page - 1) * $pageSize + 1;

if ($totalRecord == 0)
{
    $from = 0;
}

$to = min($page * $pageSize, $totalRecord);
?>

<br>

<div class="record-info">

    Hiển thị

    <b><?= $from ?></b>

    -

    <b><?= $to ?></b>

    trong

    <b><?= $totalRecord ?></b>

    bản ghi

</div>

<br>

<div class="pagination">

<?php for($i = 1; $i <= $totalPage; $i++): ?>

<a

class="<?= ($page == $i) ? 'active-page' : '' ?>"

href="index.php?url=sinhvien
&page=<?= $i ?>
&search=<?= $search ?>
&malop=<?= $malop ?>
&sort=<?= $sort ?>
&pageSize=<?= $pageSize ?>">

<?= $i ?>

</a>

<?php endfor; ?>

</div>