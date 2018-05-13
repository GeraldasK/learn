<?php
namespace Person;
use Person\Data\Connect;
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
    public function get(){
        echo $this->student_no . $this->module_code . $this->mark ;
    }

}
?>