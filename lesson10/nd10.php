<?php
class ShoppingCart
{
    private $items = array();
    private $date = null;

function addItem($ShoppingCartItem){
   array_push($this->items, $ShoppingCartItem);
}

function getItems(){
    return $this->items;
}
}

class ShoppingCartItem
{
    public $id = null;
    public $price = null;
    public $quantity = null;
    public $name = null;
}
$cart = new ShoppingCart;
$item = new ShoppingCartItem;

$item->name = "Tarchunas";
$item->price = 1.5;
$item->quantity = 1;
$item->id = 1;

$cart->addItem($item);

echo "<pre>";
var_dump($cart->getItems());
echo "</pre>"."<br>";
?>

// 2.uzduotis

<?php
class Drink
{
    protected $name = null;

    protected function setDrinkName($name){
    $this->name = $name;
    }
    function getDrinkName(){
        return $this->name;
    }
}
class Coffee extends Drink
{
    function __construct (){
        $this->setDrinkName(' coffee');
    }
}
$coffee = new Coffee();
echo "<br>";
echo "My new drink is:". $coffee->getDrinkName();

