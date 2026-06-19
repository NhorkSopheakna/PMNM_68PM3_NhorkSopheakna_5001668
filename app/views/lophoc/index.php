<h2>
    Danh sách lớp học
    <span class="badge-count">
        <?= $totalRecord ?>
    </span>
</h2>

<div class="top-bar">

    <form class="search-form">

        <input
            type="hidden"
            name="url"
            value="lophoc">

        <input
            type="text"
            name="search"
            placeholder="Tìm mã lớp, tên lớp..."
            value="<?= $search ?>">

        <button class="btn-search">
            Tìm kiếm
        </button>

        <a
            class="btn-reset"
            href="index.php?url=lophoc">
            Đặt lại
        </a>

    </form>


    <div class="right-area">

        Hiển thị:

        <select
            onchange="location.href='index.php?url=lophoc&pageSize='+this.value+'&search=<?= $search ?>&sort=<?= $sort ?>'">

            <option value="5"
            <?= $pageSize==5?'selected':'' ?>>
                5
            </option>

            <option value="10"
            <?= $pageSize==10?'selected':'' ?>>
                10
            </option>

            <option value="20"
            <?= $pageSize==20?'selected':'' ?>>
                20
            </option>

        </select>


        <a
            class="btn-add"
            href="index.php?url=lophoc/create">

            + Thêm lớp học

        </a>

    </div>

</div>


<table class="table">

    <thead>

        <tr>

            <th>

                <a class="sort-link"
                   href="index.php?url=lophoc
                   &sort=malop
                   &search=<?= $search ?>
                   &pageSize=<?= $pageSize ?>">

                    Mã lớp

                    <?php if($sort=='malop'): ?>
                        ▲
                    <?php endif; ?>

                </a>

            </th>


            <th>

                <a class="sort-link"
                   href="index.php?url=lophoc
                   &sort=tenlop
                   &search=<?= $search ?>
                   &pageSize=<?= $pageSize ?>">

                    Tên lớp

                    <?php if($sort=='tenlop'): ?>
                        ▲
                    <?php endif; ?>

                </a>

            </th>

            <th>Ghi chú</th>

            <th width="180">
                Thao tác
            </th>

        </tr>

    </thead>


    <tbody>

    <?php foreach($lophocs as $lop): ?>

        <tr>

            <td>

                <span class="lop-badge">
                    <?= $lop['malop'] ?>
                </span>

            </td>

            <td>

                <?= $lop['tenlop'] ?>

            </td>

            <td>

                <?= $lop['ghichu'] ?>

            </td>

            <td>

                <a
                    class="btn-edit"
                    href="index.php?url=lophoc/edit/<?= $lop['malop'] ?>">

                    Sửa

                </a>


                <a
                    class="btn-delete"
                    onclick="return confirm('Xóa lớp học này?')"
                    href="index.php?url=lophoc/delete/<?= $lop['malop'] ?>">

                    Xóa

                </a>

            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>



<?php
$from = ($page - 1) * $pageSize + 1;

$to = min(
    $page * $pageSize,
    $totalRecord
);
?>

<div class="record-info">

    Hiển thị

    <b><?= $from ?></b>

    -

    <b><?= $to ?></b>

    trong

    <b><?= $totalRecord ?></b>

    bản ghi

</div>


<div class="pagination">

<?php for($i=1;$i<=$totalPage;$i++): ?>

    <a
        class="<?= ($i==$page)?'active-page':'' ?>"
        href="index.php?url=lophoc
        &page=<?= $i ?>
        &search=<?= $search ?>
        &sort=<?= $sort ?>
        &pageSize=<?= $pageSize ?>">

        <?= $i ?>

    </a>

<?php endfor; ?>

</div>