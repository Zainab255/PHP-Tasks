<?php
 class car{
    public $name;
    public $model;
    public $color;
    public $price;
    // name
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    // model
    function set_model($model){
        $this->model=$model;
    }
    function get_model(){
        return $this->model;
    }
    // color
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
    // price
    function set_price($price){
        $this->price=$price;
    }
    function get_price(){
        return $this->price;
    }
 }
 $name=new car;
 $name->set_name('civic');
 $model=new car;
 $model->set_model('2022');
 $color=new car;
 $color->set_color('silver');
 $price=new car;
 $price->set_price('20 lakh');
echo "Car Name:" .$name->get_name();
echo "<br>";
echo "Car Model:" .$model->get_model();
echo "<br>";
echo "Car Color:" .$color->get_color();
echo "<br>";
echo "Car Price:" .$price->get_price();

?>