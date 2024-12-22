<?php require '../layout/header.php' ?>

<h1>Nhập tên phòng ban</h1>
<form class="ps-5 mt-5 mb-5" action="createprocess.php" method="POST">
    <div class="form-group">
        <label for="sss" class="me-5">Nhập tên phòng ban</label>
        <input type="text" class="" name="tenphongban" id="sss" placeholder="">
        <br>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </div>
</form>

<?php require '../layout/footer.php' ?>