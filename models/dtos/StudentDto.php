<?php

class StudentDto{
    public $Id ;
    public $Name ;
    public $Age ;

    public function __construct($id , $name , $age)
    {
        $this -> Id = $id;
        $this -> Name = $name;
        $this -> Age = $age;
        
    }
}

?>