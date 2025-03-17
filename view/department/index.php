<?php require './layout/header.php' ?>

<div class="chucnang d-flex justify-content-between mt-3">
    <a href="?c=department&a=create_view" class="btn btn-primary">Thêm</a>

    <form action="?c=department&a=searchByNameDepartment" method="POST" class="d-flex justify-content-between">
        <input type="text" class="form-control" name="search">
        <button type="submit" class="btn btn-secondary">SEARCH</button>
    </form>
</div>

<h1>DANH SÁCH PHÒNG BAN</h1>

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Phòng Ban</th>
                <th>Tên Phòng Ban</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $stt =  0;

                foreach($depList as $key => $value) :
            ?>
            <tr>
                <td>
                    <?= ($key + 1) ?>
                </td>
                <td>
                    <?= $value->getID()  ?>
                </td>
                <td>
                    <?= $value->getDepartmentName() ?>
                </td>
                <td>
                    <a href="?a=listEmployee&dep_id=<?= $value->getID() ?>">xem danh sách</a>
                </td>
                <td>
                    <a href="?a=edit_view&dep_id=<?= $value->getID() ?>" class="btn btn-warning btn-sm">Sửa</a>
                </td>
                <td>
                    <button data-bs-toggle="modal" data-bs-target="#modalId"
                        data-href="?a=deleteDepartment&dep_id=<?= $value->getID() ?>"
                        class="btn btn-danger btn-sm delete">
                        Xóa
                    </button>
                </td>
            </tr>

            <?php 
                endforeach;
            ?>
        </tbody>
    </table>
</div>
<span>Số lượng <?= count($depList) ?></span>



<?php  require './layout/footer.php' ?>