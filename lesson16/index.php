<?php
session_start();
require "vendor/autoload.php";
use Chuck\Chuck;
use Chuck\Data\db;

//$norris = new Chuck;
//$norris -> saveChuck($results);

for ($i=0; $i < 5; $i++) { 
    $url = "https://api.chucknorris.io/jokes/random";
    $res[] = json_decode(file_get_contents($url)); 
    $results = $res;
}
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $del = new Chuck;
    $del->deleteChuck($id);
    echo '<div class="alert alert-danger">Record deleted</div>';
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
    <?php if (isset($_SESSION['message'])): ?>
	        <div class="alert alert-success">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
	        </div>
    <?php endif ?>
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
                <input type="hidden"  name="id" value="<?php echo $record['id'];?>">
                <input type="submit" name="delete" class="btn btn-danger"
                 style="width:80px;" value="Delete">
            </form>
            </td>
        </tr> 
        <?php endforeach; ?>

    </tbody>
    </table>       

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
