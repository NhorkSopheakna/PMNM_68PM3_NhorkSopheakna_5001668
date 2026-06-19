<div class="form-card">

    <div class="form-title">
        Sửa thông tin lớp học
    </div>

    <div class="form-body">

        <form action="index.php?url=lophoc/update" method="post">

            <div class="form-group">

                <label>Mã lớp *</label>

                <input
                    class="form-control"
                    type="text"
                    name="malop"
                    value="<?= $lophoc['malop'] ?>"
                    readonly>

            </div>

            <div class="form-group">

                <label>Tên lớp *</label>

                <input
                    class="form-control"
                    type="text"
                    name="tenlop"
                    value="<?= $lophoc['tenlop'] ?>">

            </div>

            <div class="form-group">

                <label>Ghi chú</label>

                <textarea
                    class="form-control"
                    name="ghichu"><?= $lophoc['ghichu'] ?></textarea>

            </div>

            <div class="form-action">

                <button class="btn-save">
                    Cập nhật
                </button>

                <a class="btn-cancel"
                   href="index.php?url=lophoc">
                    Hủy
                </a>

                <a class="btn-back"
                   href="index.php?url=lophoc">
                    Quay lại
                </a>

            </div>

        </form>

    </div>

</div>