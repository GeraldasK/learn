<?php
namespace Person;
use Person\Data\Connect;
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

    ?>