<div class="form-card">

    <div class="form-title">
        Thêm thông tin lớp học
    </div>

    <div class="form-body">

        <form action="index.php?url=lophoc/store" method="post">

            <div class="form-group">
                <label>Mã lớp *</label>

                <input
                    class="form-control"
                    type="text"
                    name="malop"
                    placeholder="Nhập mã lớp">
            </div>

            <div class="form-group">
                <label>Tên lớp *</label>

                <input
                    class="form-control"
                    type="text"
                    name="tenlop"
                    placeholder="Nhập tên lớp">
            </div>

            <div class="form-group">
                <label>Ghi chú</label>

                <textarea
                    class="form-control"
                    name="ghichu"
                    placeholder="Nhập ghi chú"></textarea>
            </div>

            <div class="form-action">

                <button class="btn-save">
                    Thêm
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