<h1>Mano megstamiausi menesiai</h1>
<?php 
// 1. uzduotis.
$menesiai = ["Balandis","Geguze","Birzelis","Liepa"];
echo "<ol>"."<li>".$menesiai[0]."<li>".$menesiai[1]."<li>"
.$menesiai[2]."<li>".$menesiai[3]."<br>";
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
$kaina0 = $shopping_cart[0]["quantinity"] * $shopping_cart[0]["price"];
$kaina1 = $shopping_cart[1]["quantinity"] * $shopping_cart[1]["price"];
$kaina2 = $shopping_cart[2]["quantinity"] * $shopping_cart[2]["price"];
$kaina3 = $shopping_cart[3]["quantinity"] * $shopping_cart[3]["price"];
$kaina4 = $shopping_cart[4]["quantinity"] * $shopping_cart[4]["price"];
echo $shopping_cart[3]["type"];
echo "<br>";
echo "<br>";
echo $shopping_cart[4]["name"]." price is ".$kaina4." euro";
echo "<br>";
echo $shopping_cart[3]["name"]." price is ".$kaina3." euro";
echo "<br>";
echo "<br>";
echo $shopping_cart[0]["type"];
echo "<br>";
echo "<br>";
echo $shopping_cart[0]["name"]." price is ".$kaina0." euro";
echo "<br>";
echo $shopping_cart[1]["name"]." price is ".$kaina1." euro";
echo "<br>";
echo $shopping_cart[2]["name"]." price is ".$kaina2." euro";
echo "<br>";
?>
<?php
//3. Uzduotis.
$arr = ["one" , "two" , "three" , "four"];

function arrayFunction($arr){
  
    if(end($arr) == false){
    return "Array is empty";
}else 
return end($arr);

   /*if(empty($arr)){
        return "Array is empty";
    }else
    return end($arr);*/
    
}


echo "<br>";
echo arrayFunction($arr);


?>


