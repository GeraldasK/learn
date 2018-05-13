<?php
namespace Person;
use Person\Data\Connect;
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
?>