<?php
    session_start();
    $id = $_GET["id"];
    $students = $_SESSION["students"];
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
        if($s->id == $id){
            $student = $s;
        }
    }
    $_SESSION["student"] = $student;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>เพิ่มข้อมูลนิสิต</h1>
    <a href="index.php">กลับไปยังหน้าแรก</a><br><br>
    <form action="editor.php" method="get">
        รหัสนิสิต <input type="text" name = "id" value=<?= $student->id?>><br>
        คำนำหน้า <select name="gender" id="gender" value=<?= $student->gender?>>
            <optgroup>
                <option value="male">male</option>
                <option value="female">female</option>
            </optgroup>

        </select>
        ชื่อนิสิต <input type="text" name = "firstName" value = <?= $student->firstName?>>
        นามสกุล <input type="text" name = "lastName" value = <?= $student->lastName?>><br>
        ชั้นปี <select name="year" id="year" value= <?=$student->year?>>
            <optgroup>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="7">8</option>
            </optgroup>
        </select>
        เกรดเฉลี่ย <input type="text" name = "gpa" value=<?= $student->gpa?>>
        วันเกิด <input type="date" name = "birthDay" value=<?= $student->birthDay?>>
        
        <input type="submit" value="submit">
    </form>
        

</body>
</html>

