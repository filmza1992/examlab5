<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>แสดงข้อมูลทั้งหมดของนิสิต</h1>
    <a href="add.html">เพิ่มข้อมูลนิสิต</a><br>
    <?= 
        session_start();
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
        $students = null;
        if(isset($_SESSION["students"])){
            $students = $_SESSION["students"];
            if($students == null){
                echo "<hr>ไม่มีข้อมูลนิสิต<hr>";
                echo "in 1";
            }else{
                echo "ID\tgender\tชื่อนิสิต\tนามสกุล\tชั้นปี\tเกรดเฉลี่ย\tวันเกิด\tจัดการข้อมูล";
                echo "<br>";
                $index = 0;
                foreach($students as $s){
                    echo $s->id."\t".$s->gender."\t".$s->firstName."\t".$s->lastName."\t".$s->year."\t".$s->birthDay."\t".
                            "<a href ='delete.php?id=$s->id'>delete</a> <a href = 'edit.php?id=$s->id'>edit</a>" 
                        ."<br>";
                    $index ++;
                }
            }
        }else{
            echo "ไม่มีข้อมูลนิสิต<hr>";
            echo "in 2";
        }
        
    ?>
    
    <a href="destroy.php">
        <input type="submit" value="destroy" >
    </a>
</body>
</html>