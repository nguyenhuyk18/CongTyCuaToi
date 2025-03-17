<?php 
    class DepartmentRepository {
        // hiển thị
       public function fetch() {
        global $conn;
        $sql = "SELECT * FROM departments";
        $result = $conn->query($sql);
        $dep = [];
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id = $row['department_id'];
                $department_name = $row['department_name'];
                $tmp = new Department($id, $department_name);
                $dep[] = $tmp;
            }
        }
        return $dep;
       }
    //    thêm vào database
       public function insert($department_name) {

        global $conn;
        $sql = "INSERT INTO departments (department_name)
        VALUES('$department_name');
        ";
        if($conn->query($sql)) {
            // $_SESSION['success'] = 'Thêm phòng ban ' . $department_name . ' thành công !!';
            return True;
        }
        
            // $_SESSION['error'] = 'Lỗi đã xảy ra ' . $conn->error;
            return false;
        
       
        // exit;

       }

       public function delete($dep_id) {
        global $conn;
        $sql = "DELETE FROM departments WHERE department_id = $dep_id";
        if($conn->query($sql)) {
            return true;
        }
        return false;
       }


    public function searchDepartmentByID($dep_id) {
        global $conn;
        $sql = "SELECT * FROM departments WHERE department_id = $dep_id";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row['department_id'];
            $name = $row['department_name'];
            $department = new Department($id, $name);
            return $department;
        }
        return NULL;
    }


        public function searchDepartmentByName($dep_name) {
            global $conn;
            $sql = "SELECT * FROM departments WHERE department_name LIKE '%$dep_name%'";
            $result = $conn->query($sql);
            $dep = [];
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $id = $row['department_id'];
                    $name = $row['department_name'];
                    $department1 = new Department($id, $name);
                    $dep[] = $department1;
                }
            }
            return $dep;
       }

       public function updateDepartment($dep_id, $dep_name) {
        global $conn;
        $sql = "UPDATE departments SET department_name = '$dep_name' WHERE department_id = $dep_id";

        if($conn->query($sql)) {
            return true;
        }
        return false;
       }
    }


?>