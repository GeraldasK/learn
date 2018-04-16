<?php

//2. uzduotis

$type = "cat";
$name = "Tim";
$age = 1;
$weight = 3.6;
if ( $type == "cat" && $name == "Tim")
echo "Tim is a cat";
else
echo "Tim is not a cat!";
echo "<br>";
?>

<?php
$price = 582;

if ($price > 500 && $price < 600){
    echo "Price is big enough.";
}elseif ($price > 600 && $price < 700){
    echo "OMG!";
}else
echo "Price is ok.";
?>


