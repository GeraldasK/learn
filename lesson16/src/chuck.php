<?php
namespace Chuck;
use Chuck\Data\Db;
use PDO;

class Chuck extends Db
{
    public function saveChuck($records){
            foreach($records as $record){

                $pdo = $this->getDb();
                $sql = "SELECT *FROM chuck WHERE id = '$record->id'";
                $result = $pdo->query($sql)->fetchAll(PDO::FETCH_OBJ);

                if($result){
                    echo "Record already exist <br>";
                    continue;
                }else
                    $sql = "
                    INSERT INTO chuck (id , value, url , icon_url)
                    VALUES(:id, :value, :url, :icon_url)";
                    $this->query($sql, [
                        'id' => $record->id,
                        'value' => $record->value,
                        'url' => $record->url,
                        'icon_url' => $record->icon_url
                    ]);
                    
                    echo "Record uploaded <br>";
            }
    }
    
    public function getChuck(){
        $sql = "SELECT * FROM chuck LIMIT 10";
        $res = $this->query($sql, [])->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>