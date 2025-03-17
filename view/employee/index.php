<?php require './layout/header.php' ?>

<div class="chucnang d-flex justify-content-between mt-3">
    <a href="?c=employee&a=add_view" class="btn btn-primary">Thêm</a>

    <form action="" method="POST" class="d-flex justify-content-between">
        <input type="text" class="form-control" name="search">
        <button type="submit" class="btn btn-secondary">SEARCH</button>
    </form>
</div>

<h1>DANH SÁCH NHÂN VIÊN</h1>

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã nhân viên</th>
                <th>Họ Tên</th>
                <th>Tên Cuối</th>
                <th>Email</th>
                <th>Số Điện Thoại</th>
                <th>Ngày Thuê</th>
                <th>Lương</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($empList as $key => $value) :
            ?>
            <tr>
                <td><?= ($key + 1) ?></td>
                <td><?= $value->getEmployeeID() ?></td>
                <td><?= $value->getFirstName() ?></td>
                <td><?= $value->getLastName() ?></td>
                <td><?= $value->getEmail() ?></td>
                <td><?= $value->getPhoneNumber() ?></td>
                <td><?= $value->getHireDate() ?></td>
                <td><?= $value->getSalary() ?></td>
                <td>
                    <a href="?c=employee&a=edit_view&idemp=<?= $value->getEmployeeID() ?>"
                        class="btn btn-warning btn-sm">SỬA</a>
                </td>
                <td>
                    <button data-bs-toggle="modal" data-bs-target="#modalId"
                        data-href="?c=employee&a=deleteemploy&idemp=<?= $value->getEmployeeID() ?>"
                        class="btn btn-danger btn-sm delete">
                        Xóa
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<span>Số lượng: <?= count($empList) ?></span>


<?php require './layout/footer.php' ?>