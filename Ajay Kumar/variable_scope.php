<?php

// 1: local scope : we can only access the variable within the functional block;
// $a= 1;
// function test(){
//     echo $a;
// }
// test();


// 2:  global scope:we can access the variable througout the
// $a = 1;
// $b =2;
// function sum(){
//     global $a,$b;
//     $b = $a + $b;
// }
// sum();
// echo $b;

 

// we can also use $GLOBALS[] ;
// $a = 1;
// $b = 2;

// function Sum()
// {
//     $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
// } 

// Sum();
// echo $b;



// 3: static variable : 
function test(){
    static $a=1;
    echo $a;
    $a++;
 

}
test();
test();
test();
?>