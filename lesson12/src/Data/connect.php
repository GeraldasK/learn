<?php
namespace Person\Data;
use PDO;
class Connect{
    public function getDb(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "myplace";
        $dsn = "mysql:host=$host;dbname=$db";
        return new PDO($dsn, $user, $password);
    }
    public function getData($sql, $data = []){
        $sth = $this->getDb()->prepare($sql);
        $sth->execute($data);
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>