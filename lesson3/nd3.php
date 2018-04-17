<h1>Mano megstamiausi menesiai</h1>

<?php 
// 1. uzduotis.
$menesiai = ["Balandis","Geguze","Birzelis","Liepa"];

for($i = 0, $j = 1 ; $i < count($menesiai); $i++ , $j++){
    echo $j.".".$menesiai[$i]."<br>";
}
echo "<br>";
?>

<?php
// 2. uzduotis.
$shopping_cart = [
[
    'type' => 'vegetables',
    'name' => 'patatoe',
    'quantinity' => '10',
    'price' => '1.0'
],
[
    'type' => 'vegetables',
    'name' => 'onion',
    'quantinity' => '5',
    'price' => '0.5'
],
[
    'type' => 'vegetables',
    'name' => 'cucumber',
    'quantinity' => '2',
    'price' => '1.2'
],
[
    'type' => 'fruits',
    'name' => 'banana',
    'quantinity' => '2',
    'price' => '1.0'
],
[
    'type' => 'fruits',
    'name' => 'apple',
    'quantinity' => '3',
    'price' => '1.2'
]
];
foreach($shopping_cart as $val){
    $kaina = $val['quantinity']*$val['price'];
    if($val['type'] == 'fruits')
    echo $val['name']." price is ".$kaina."<br>";
}
echo "<br>";
foreach($shopping_cart as $val){
    $kaina = $val['quantinity']*$val['price'];
    if($val['type'] == 'vegetables')
    echo $val["name"]." price is ".$kaina."<br>";
}
echo "<br>";
?>

<?php
//3. Uzduotis.

$arr = ["one" , "two" , "three" , "four"];

function arrayFunction($arr){
  
 /*   if(end($arr) == false){
    return "Array is empty";
}else 
return end($arr);*/

   if(empty($arr)){
        return "Array is empty";
    }else
    return end($arr);
}
echo "<br>";
echo arrayFunction($arr);
?>


