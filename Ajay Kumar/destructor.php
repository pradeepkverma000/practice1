<?php
class fruits{
    public $name;
    
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;

    }
    function __destruct(){
        echo "The fruit is {$this->name} <br> the color of the fruit is {$this->name}";

    }
}
$apple = new fruits("apple","red");
?>