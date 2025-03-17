<?php 
    class DepartmentController {
        public function index() {
            $_GET['a'] = 'index';
            $_GET['c'] = 'department';
            $department = new DepartmentRepository();
            $depList = $department->fetch();
            require './view/department/index.php';
        }

        // Thêm 
        public function create_view() {
            require './view/department/add.php';
        }

        public function create() {
            $department = new  DepartmentRepository();
            if($department->insert($_POST['department_name'])) {
                $_SESSION['success'] = 'Thêm phòng ban ' . $_POST['department_name'] . ' thành công !!';
            }
            else {
                $_SESSION['error'] = 'Thêm phòng ban' . $_POST['department_name'] .  ' thất bại ';
            }
            header('location: /');
        }



        // Xóa
        public function deleteDepartment() {
            $department = new DepartmentRepository();
            if($department->delete($_GET['dep_id'])) {
                $_SESSION['success'] = 'Xóa phòng ban có mã là: ' . $_GET['dep_id'] . ' thành công !!!';
            }
            else {
                $_SESSION['error'] = 'Xóa phòng ban có mã là ' . $_GET['dep_id'] . ' không thành công !!!';
            }
            header('location: /');
        }

        // Sửa
        public function edit_view() {
            $department = new DepartmentRepository();
            $depSearch = $department->searchDepartmentByID($_GET['dep_id']);
            require './view/department/edit.php';
        }

        public function editDepartment() {
            $department = new DepartmentRepository();
            if($department->updateDepartment($_POST['id_dep'], $_POST['department_name'])) {
                $_SESSION['success'] = 'Cập nhật mã phòng ban ' . $_POST['id_dep'] . ' Thành Công';
            }
            else {
                $_SESSION['error'] = 'Cập nhật mã phòng ban ' .$_POST['id_dep'] . ' Không Thành Công !!';
            }
            header('location: /');
        }

        // tim kiem theo ten phong ban
        public function searchByNameDepartment() {
            $department = new DepartmentRepository();
            $depList = $department->searchDepartmentByName($_POST['search']);
            require './view/department/index.php';
        }

        public function listEmployee() {
            $employee = new EmployeeRepository();
            $empList = $employee->listEmployeeByDepID($_GET['dep_id']);
            require './view/employee/index.php';
        }
    }


?>