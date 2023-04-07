<?php
class class1{
    
    function __construct(){
        echo "constructor 1";
    }
    function fun(){
        echo "fun1";
    }
    function __destruct(){
        echo "function destruct here";
    }
   
    
}

$obj = new class1();
$obj->fun();
?>