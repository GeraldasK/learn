<?php
class Connect{
    function getDb(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "myplace";
        $dsn = "mysql:host=$host;dbname=$db";
        return new PDO($dsn, $user, $password);
    }
}
class Student extends Connect
{
    public $student_no;
    public $surname;
    public $forename;
    function __construct( $student_no, $surname, $forename){
        $this->student_no = $student_no;
        $this->surname = $surname; 
        $this->forename = $forename; 
    }

    public function save(){
        $sql = "INSERT INTO students (student_no, surname, forename) VALUES (:student_no, :surname, :forename)";    
        $sth = $this->getDb()->prepare($sql);
        $sth->execute([
            "student_no" => $this->student_no,
            "surname" => $this->surname,
            "forename" => $this->forename
            ]);
            }

}


class Module extends Connect
{
    public $module_code;
    public $module_name;

    function __construct( $module_code, $module_name){
        $this->module_code = $module_code;
        $this->module_name = $module_name; 
    }

    public function save(){
        $sql = "INSERT INTO modules (module_code, module_name) VALUES (:module_code, :module_name)";    
        $sth = $this->getDb()->prepare($sql);
        $sth->execute([
            "module_code" => $this->module_code,
            "module_name" => $this->module_name
        ]);
        }
    }


class Mark extends Connect
{
    public $student_no;
    public $module_code;
    public $mark;

    function __construct($student_no, $module_code, $mark){
        $this->student_no = $student_no;
        $this->module_code = $module_code;
        $this->mark = $mark;
    }

    public function save(){
        $sql = "INSERT INTO marks (student_no, module_code, mark) VALUES (:student_no, :module_code, :mark)";    
        $sth = $this->getDb()->prepare($sql);
        $sth->execute([
            "student_no" => $this->student_no,
            "module_code" => $this->module_code,
            "mark" => $this->mark
            ]);
    }

}


$student = new Student("200057", "Snoop", "Dog");
var_dump($student);
$student->save();

$module = new Module("CME", "db");
var_dump($module);
$module->save();

$mark = new Mark("266654333", "CMCMCM3", "89");
var_dump($mark);
$mark->save();

?>



<?php

?>