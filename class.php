<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fruits</title>
</head>
<body>
    <?php
     class Fruit{
        public $name;
        public $color;
        public $weight;

        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
        function set_color($color){
            $this->color=$color;
        }
        function get_color(){
            return $this->color;
        }
        function set_weight($weight){
            $this->weight=$weight;
        }
        function get_weight(){
            return $this->weight;
        }
     }
     $apple =new Fruit;
     $apple->set_name("apple");
     $apple->set_color("red");
     $apple->set_weight("10kg");
     $banana =new Fruit;
     $banana->set_name("banana");
     $banana->set_color("yellow");
     $banana->set_weight("1 dozen");
     $mango =new Fruit;
     $mango->set_name("mango");
     $mango->set_color("green");
     $mango->set_weight("20kg");
    echo "Name :" .$apple->get_name();
    echo "<br>";
    echo "Color :" .$apple->get_color();
    echo "<br>";
    echo "Weight :" .$apple->get_weight();
    echo "<br>";
    echo "Name :" .$banana->get_name();
    echo "<br>";
    echo "Color :" .$banana->get_color();
    echo "<br>";
    echo "Weight :" .$banana->get_weight();
    echo "<br>";
    echo "Name :" .$mango->get_name();
    echo "<br>";
    echo "Color :" .$mango->get_color();
    echo "<br>";
    echo "Weight :" .$mango->get_weight();
    echo "<br>";
    ?>
</body>
</html>