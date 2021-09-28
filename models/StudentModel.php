<?php
    class StudentModel extends Db{
        public function GetStudents(){
            //return "Nguyen Van Thong";
            $query = " SeleCT * FROM student";
            return mysqli_query($this->con, $query);

        }

        public function Sum($a , $b)
        {
            return $a + $b;
        }
    }
?>