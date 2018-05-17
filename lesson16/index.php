<?php
require "vendor/autoload.php";
use Chuck\Chuck;
use Chuck\Data\db;

for ($i=0; $i < 5; $i++) { 
    $url = "https://api.chucknorris.io/jokes/random";
    $res[] = json_decode(file_get_contents($url)); 
    $results = $res;
}

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        var_dump($id);
        $sql = "SELECT icon_url, url , value FROM chuck WHERE id = '$id'";
        $db = new Db;
        $sth = $db->getDb()->prepare($sql);
        $sth->execute();
        $record = $sth->fetch(PDO::FETCH_ASSOC);        
    }
//$norris = new Chuck;
//$norris -> saveChuck($results);
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
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Chuck</th>
        <th>Jokes</th>
        <th>Edit/delete</th>
      </tr>
    </thead>
    <tbody>
    
        <?php
        $records = new Chuck();
        foreach($records->getChuck() as $record):
        ?>
        <tr>
            <td><img src="<?php echo $record['icon_url']?>"</td>
            <td><?php echo $record['value']?></td>
            
            <td>
            <form action="edit.php">
                <a class="btn btn-primary" href="edit.php?edit=<?php echo $record['id'];?>" id="<?php $record['id']?>" style="width:80px;">Eddit </a>
                <!--<input type="hidden" name="id" value="<?php //echo $record['id']?>">-->
            </form>
            <form method="POST">
            <button type="submit" name="<?php $record['id']?>" class="btn btn-danger" id="<?php $record['id']?>" style="width:80px;">Delete</button>
            </form>
            </td>
        </tr> 
        <?php endforeach; ?>

    </tbody>
    </table>       
        <div>
            <?php
                //$norris = new Chuck;
                //$norris -> saveChuck($results);
            ?>
        </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>