<?php
class Home extends BaseController{

    function SayHi(){
        $studentTeo = $this->model("StudentModel");
        echo $studentTeo->GetStudents();
    }

    function Show($a, $b)
    {
        //call Model
        $st = $this->model("StudentModel");
        $tong = $st->Sum($a , $b);
       // echo "$a - $b";
       //Display on view
      // $this->view("demo", ["Page"=>"contact", "Number" => $tong , "Key"=>"Value" , "Arr" =>["A","B"]]);

       $this->view("demo",
            [
                "Page"=>"news", 
                "Number" => $tong , 
                "Key"=>"Value" , 
                "Arr" =>["A","B"], 
                "SV" => $st->GetStudents()
           ] 
        );

    }
}
?>