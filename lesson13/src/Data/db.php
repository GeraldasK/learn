<?php
namespace Chuck\Data;
use PDO;
class Db
{
            const HOST = "localhost";
            const USER = "root";
            const PASSWORD = "";
            const DB = "myplace";

    function getDb(){
        try{
            //Jei kodas veiks, vykdys sita linija
            return new PDO('mysql:host=localhost; dbname=myplace', 'root', '');
           //return new PDO('HOST; DB', 'USER', 'PASSWORD');
        }
        catch (Exception $e){
            //jei try neveiks atspausdins sita zinute
            echo "no Connection";
            exit();
        }
    }
    public function query($sql, $data = []){
        $sth = $this->getDb()->prepare($sql);
        $sth->execute($data);
        return $sth;
    }
}

?>