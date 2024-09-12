<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>person</title>
</head>
<body>
    <?php
    class person{
        public $name;
        public $email;
        public $passward;
        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
    }
function set_email($email){
    $this->email=$email;
}
function get_email(){
    return $this->email;
}
function set_passward($passward){
    $this->passward=$passward;
}
function get_passward(){
    return $this->passward;
}
    }
    $name=new person;
    $name->set_name('zainab');
    $email=new person;
    $email->set_email('zianba57@gmail.com');
    $passward=new person;
    $passward->set_passward('684gdshf87');
    echo "Name:" .$name->get_name();
    echo "<br>";
    echo "email:" .$email->get_email();
    echo "<br>";
    echo "passward:" .$passward->get_passward();
    ?>
</body>
</html>