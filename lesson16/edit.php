<?php
require "vendor/autoload.php";
use Chuck\Chuck;
use Chuck\Data\db;

//$chuck = new Chuck;
//$chuck->editChuck();

//var_dump($_POST);
if(isset($_GET['edit'])):
  $id = $_GET['edit'];
  $sql = "SELECT icon_url, url , value FROM chuck WHERE id = '$id'";
  $db = new Db;
  $sth = $db->getDb()->prepare($sql);
  $sth->execute();
  $record = $sth->fetch(PDO::FETCH_ASSOC);    
endif;    

if(isset($_POST['update'])){
  $db = new Db;
  $url = $_POST['url'];
  $id = $_POST['id'];
  $icon_url = $_POST['icon_url'];
  $value = $_POST['value'];
  var_dump($url);
  /*$sql = '
  UPDATE chuck SET icon_url = "'.$icon_url.'", url = "'.$url.'", value = "'.$value.'"
  WHERE id ="'.$id.'"';*/
  $sql = '
  UPDATE chuck SET icon_url = "'.$icon_url.'", url = "'.$url.'", value = "'.$value.'"
  WHERE id ="'.$id.'"';
  //var_dump($sql);
  $sth = $db->getDb()->prepare($sql);
  $sth->execute();
  echo $sth->rowCount() . " records UPDATED successfully";

}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body class="container">
        <form action="" method="POST">
            <?php /* if(isset($_POST['id'])):
              $id = $_POST['id'];
              $sql = "SELECT * FROM chuck WHERE id LIKE '$id'";
                $persons = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach($persons as $person);
                //var_dump($person);*/?>
      
        <div class="form-group">
            URL<input type="text" class="form-control" name="url" value="<?php echo $record['url']?>">
            Icon_url<input type="text" class="form-control" name="icon_url" value="<?php echo $record['icon_url']?>">
            value<input type="text" class="form-control" name="value" value="<?php echo $record['value']?>">
            
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" class="btn btn-primary" name="update" value="update">
            
            </div>
        </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>