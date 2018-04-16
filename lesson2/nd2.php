<?php 
declare(strict_types = 1);
//2. uzduotis
$myName = "<h1>Geraldas</h1>";
echo $myName;
echo "<br>";
?> 

<?php 

//3. uzduotis
function myFunction( string $first, $second){
    
    if($second > 10){
        echo "<h1> $first </h1>";
    }else
        echo $first;
    if($first !==  " ")
    
    return false;
}
echo myFunction("string", 50);
echo "<br>";
?>

<?php
//4.uzduotis
function myMood($mood){
    $happy = ":-)";
    $sad = ":-(";
    if($mood == "happy"){
        $result = $happy;
    }
    elseif ($mood == "sad"){
        $result = $sad;
    }
    else 
    $result = ":-|";


function myName(){
    $name = "<h1>Geraldas</h1>";
    return $name;
}
$vardas = myName();
return $vardas."is ".$result ." today.";
}
echo myMood("hvhjvhjv");


?>




