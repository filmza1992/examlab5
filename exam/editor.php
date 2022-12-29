<?php
    session_start();
    $student = $_SESSION["student"];
    $id = $_GET["id"];
    $gender = $_GET["gender"];
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $year  = $_GET["year"];
    $gpa = $_GET["gpa"];
    $birthDay = $_GET["birthDay"];

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

    foreach($_SESSION["students"] as $s){
        if($s === $student){
            $s->id = $id;
            $s->gender = $gender;
            $s->firstName = $firstName;
            $s->lastName = $lastName;
            $s->year = $year;
            $s->gpa = $gpa;
            $s->birthDay = $birthDay;
        }
    }
    header("Location: index.php")
?>