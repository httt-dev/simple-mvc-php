<?php

    class Api extends BaseController{
        public function Students()
        {
            require_once "./mvc/models/dtos/StudentDto.php";
            //call Model
            $student = $this->model("StudentModel");
            //return json
            $sv = $student->GetStudents();
            $mangSv =[];
            

            while($item = mysqli_fetch_array($sv)){
                array_push($mangSv , new StudentDto($item["id"] , $item["name"] , $item["age"] ));
            }
            echo json_encode($mangSv);
        }
    }

   
?>