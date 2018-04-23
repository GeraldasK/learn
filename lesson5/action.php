<?php
date_default_timezone_set ("Europe/Vilnius");
$uploaddir = __DIR__."\\uploads\\";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$fileName = basename($_FILES['userfile']['name']);
//echo $uploadfile;

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
echo "File is valid, and was successfully uploaded."."<br>";
}
else {
 echo "Possible file upload attack!\n";
}

$file = "files.txt";
$data = $fileName ." - ". date("Y-m-d H:i:s")." \n";
      if(!file_exists($file)){
    file_put_contents($file, $data);
      }else{
    file_put_contents($file, $data, FILE_APPEND);
     }
     
     $file_data = file($file);
     foreach ($file_data as $line){
        echo $line."<br>";
       }
       header("Location: index.php");
?>
