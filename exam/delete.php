<?php
    session_start();
    $id = $_GET['id'];
    class student{
        public $id;
        public $gender;
        public $firstName;
        public $lastName;
        public $year;
        public $gpa;
        public $birthDay;


        function __construct($id , $gender , $firstName , $lastName , $year , $gpa , $birthDay){
            $this->id = $id;
            $this->gender = $gender;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->year = $year;
            $this->gpa = $gpa;
            $this->birthDay = $birthDay;
        }
    }
    $index = 0;
    foreach($_SESSION["students"] as $s){
        if($s->id == $id){
            echo "have one<br> id = $s->id <br>";
            echo "delete success";
            array_splice($_SESSION["students"],$index,1);
            header("Location: index.php");
        }
        $index ++;
    }
?>