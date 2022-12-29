<?php
    
    $id = $_GET["id"];
    $gender = $_GET["gender"];
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $year = $_GET["year"];
    $gpa = $_GET["gpa"];
    $birthDay = $_GET["birthDay"];
    
    session_start();
    if(!isset($_SESSION["students"])){
        $_SESSION["students"] = array();
    }
    
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

    $student = new student($id , $gender , $firstName , $lastName , $year , $gpa ,$birthDay);
    array_push($_SESSION["students"],$student);

    header('Location: index.php');
?>
