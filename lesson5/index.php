<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data" action="action.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="500000">
Upload file: <input name="userfile" type="file">
<input type="submit" value="Send file">
</form>
<?php     
    $file = 'files.txt';    
    if(!empty($file)){    
    $file_data = file($file);        
    foreach($file_data as $file){    
    echo $file."<br>";     
             }   
     } 
 ?>
</body>
</html>