<?php 
    class EmployeeController {
        public function index() {
            $employee = new EmployeeRepository();
            $empList = $employee->fetch();
            require './view/employee/index.php';
        }

        public function add_view() {
            $department = new DepartmentRepository();
            $depList = $department->fetch();
            require './view/employee/add.php';
        }

        public function add_employee() {
            $employee = new EmployeeRepository();
            if($employee->create($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone'], $_POST['hiredate'], $_POST['salary'], $_POST['departmentid'])) {
                $_SESSION['success'] = 'Thêm nhân viên ' . $_POST['lname'] . ' ' . $_POST['fname'] . ' thành công !!!';
            }
            else {
                $_SESSION['error'] = 'Thêm nhân viên ' . $_POST['fname'] . ' ' . $_POST['lname'] . ' không thành công !!!';
            }
            header('location: /?a=index&c=employee');
        }


        public function deleteemploy() {
            $employee = new EmployeeRepository();
            if($employee->delete($_GET['idemp'])) {
                $_SESSION['success'] = "Xóa nhân viên có mã là " . $_GET['idemp'] . ' thành công !!!';
            }
            else {
                $_SESSION['error'] = "Xóa nhân viên không thành công !!";
            }
            header('location: /?c=employee&a=index');
        }

        public function edit_view(){
            $department = new DepartmentRepository();
            $depList = $department->fetch();
            $employee = new EmployeeRepository();
            $emp = $employee->searchEmpByID($_GET['idemp']);
            require './view/employee/edit.php';
        }

        public function edit_employee() {
            $employee = new EmployeeRepository();
            $empold = $employee->searchEmpByID($_POST['id_emp']);
            $ten = $empold->getFirstName() . ' ' . $empold->getLastName();
            
            if($employee->update($_POST['id_emp'] , $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone'], $_POST['hiredate'], $_POST['salary'], $_POST['departmentid'])) {
                $_SESSION['success'] = 'Cập nhật nhân viên có tên là ' . $ten . ' thành ' . $_POST['fname'] . ' ' . $_POST['lname'];
            }
            else {
                $_SESSION['error'] = 'Lỗi đã xảy ra khi đang cập nhật nhân viên tên ' . $ten;
            }
            header('location: /?c=employee&a=index');
        }

        
    }

?>