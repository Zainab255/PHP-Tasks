<?php
  class student{
    public $name;
    public $rollnum;
    public $subject;
    public $obtainedmarks;
    public $totalmarks;
    public $result;
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_rollnum($rollnum){
        $this->rollnum=$rollnum;
    }
    function get_rollnum(){
        return $this->rollnum;
    }
    function set_subject($subject){
        $this->subject=$subject;
    }
    function get_subject(){
        return $this->subject;
    }
    function set_obtainedmarks($obtainedmarks){
        $this->obtainedmarks=$obtainedmarks;
    }
    function get_obtainedmarks(){
        return $this->obtainedmarks;
    }
    function set_totalmarks($totalmarks){
        $this->totalmarks=$totalmarks;
    }
    function get_totalmarks(){
        return $this->totalmarks;

  }
}
$name=new student;
$name->set_name('zainab');
$rollnum=new student;
$rollnum->set_rollnum('57436');
$subject=new student;
$subject->set_subject('computer');
$obtainedmarks=new student;
$obtainedmarks->set_obtainedmarks('89');
$totalmarks=new student;
$totalmarks->set_totalmarks('100');
echo "Name:" .$name->get_name();
echo "<br>";
echo "rollnum:" .$rollnum->get_rollnum();
echo "<br>";
echo "subject:" .$subject->get_subject();
echo "<br>";
echo "total marks:" .$totalmarks->get_totalmarks();
echo "<br>";
echo "obtained marks:" .$obtainedmarks->get_obtainedmarks();
?>