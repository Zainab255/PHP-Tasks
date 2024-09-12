<?php
class Product {
    public $name;
    public $description;
    public $price;

}

$product1 = new Product();
$product1->name = 'IPhone 12';

echo $product1->name; 
echo "<br>";
$product2 = new Product();
$product2->name = 'IPhone 12 Pro';

echo $product2->name; 
?>