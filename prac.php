<?php
 class product{
    public $name;
    public $decsription;
    public $price;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_product2($name){
        $this->name=$name;
    }
    function get_product2(){
        return $this->name;
    }
 }
 $product1=new product;
 $product1->set_name('Iphone 12');
 echo "" .$product1->get_name();
 echo "<br>";
 $product2=new product;
 $product2->set_name('Iphone 12 pro');
 echo "" .$product2->get_name();
?>