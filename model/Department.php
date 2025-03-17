<?php 
    class Department {
        private $id;
        private $department_name;


        function __construct($id, $department_name) 
        {
            $this->id = $id;
            $this->department_name = $department_name;
        }


        public function getID() {
            return $this->id;
        }


        public function getDepartmentName() {
            return $this->department_name;
        }
    }

?>