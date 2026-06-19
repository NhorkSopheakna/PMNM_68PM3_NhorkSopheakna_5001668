<div class="form-card">

    <div class="form-title">
        Sửa thông tin sinh viên
    </div>

    <div class="form-body">

        <form action="index.php?url=sinhvien/update" method="post">

            <input type="hidden"
                   name="id"
                   value="<?= $sinhvien['stt'] ?>">

            <div class="form-group">
                <label>Họ tên *</label>

                <input
                    class="form-control"
                    type="text"
                    name="hoten"
                    value="<?= $sinhvien['ten'] ?>">
            </div>

            <div class="form-group">
                <label>Giới tính *</label>

                <select class="form-control" name="gioitinh">

                    <option value="Nam"
                        <?= $sinhvien['gioitinh']=='Nam'?'selected':'' ?>>
                        Nam
                    </option>

                    <option value="Nữ"
                        <?= $sinhvien['gioitinh']=='Nữ'?'selected':'' ?>>
                        Nữ
                    </option>

                </select>

            </div>

            <div class="form-group">
                <label>MSSV *</label>

                <input
                    class="form-control"
                    type="text"
                    name="mssv"
                    value="<?= $sinhvien['mssv'] ?>">
            </div>

            <div class="form-group">
                <label>Lớp *</label>

                <select class="form-control" name="malop">

                    <?php foreach($lophocs as $lop): ?>

                    <option
                        value="<?= $lop['malop'] ?>"
                        <?= $lop['malop']==$sinhvien['malop']?'selected':'' ?>>

                        <?= $lop['tenlop'] ?>

                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-action">

                <button class="btn-save">
                    Cập nhật
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