<div class="form-card">

    <div class="form-title">
        Thêm thông tin sinh viên
    </div>

    <div class="form-body">

        <form action="index.php?url=sinhvien/store" method="post">

            <div class="form-group">
                <label>Họ tên *</label>

                <input
                    class="form-control"
                    type="text"
                    name="hoten"
                    placeholder="Nhập họ tên sinh viên">
            </div>

            <div class="form-group">
                <label>Giới tính *</label>

                <select class="form-control" name="gioitinh">
                    <option value="">-- Chọn giới tính --</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>

            <div class="form-group">
                <label>MSSV *</label>

                <input
                    class="form-control"
                    type="text"
                    name="mssv"
                    placeholder="Nhập MSSV">
            </div>

            <div class="form-group">
                <label>Lớp *</label>

                <select class="form-control" name="malop">

                    <option value="">
                        -- Chọn lớp --
                    </option>

                    <?php foreach($lophocs as $lop): ?>

                    <option value="<?= $lop['malop'] ?>">
                        <?= $lop['tenlop'] ?>
                    </option>

                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-action">

                <button class="btn-save">
                    Thêm
                </button>

                <a class="btn-cancel"
                   href="index.php?url=sinhvien">
                    Hủy
                </a>

                <a class="btn-back"
                   href="index.php?url=sinhvien">
                    Quay lại
                </a>

            </div>

        </form>

    </div>

</div>