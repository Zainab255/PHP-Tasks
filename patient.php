<?php
class patient{
    public $name;
    public $age;
    public $gender;
    public $date;
    public $disease;
    public $bloodpressure;
   // name 
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
// age
    function set_age($age){
        $this->age=$age;
    }
    function get_age(){
        return $this->age;
    }
// gender
    function set_gender($gender){
        $this->gender=$gender;
    }
    function get_gender(){
        return $this->gender;
    }
// date
    function set_date($date){
        $this->date=$date;
    }
    function get_date(){
        return $this->date;
    }
// disease
    function set_disease($disease){
        $this->disease=$disease;
    }
    function get_disease(){
        return $this->disease;
    }
// bloodpressure
    function set_bloodpressure($bloodpressure){
        $this->bloodpressure=$bloodpressure;
    }
    function get_bloodpressure(){
        return $this->bloodpressure;
    }
}
$name=new patient;
$name->set_name('zainab');
$age=new patient;
$age->set_age('20');
$gender=new patient;
$gender->set_gender('Female');
$disease=new patient;
$disease->set_disease('Fever');
$bloodpressure=new patient;
$bloodpressure->set_bloodpressure('120/90');
echo "Name:" .$name->get_name();
echo "<br>";
echo "Age:" .$age->get_age();
echo "<br>";
echo "Gender:" .$gender->get_gender();
echo "<br>";
echo "Disease:" .$disease->get_disease();
echo "<br>";
echo "Bloodpressure:" .$bloodpressure->get_bloodpressure();

?>