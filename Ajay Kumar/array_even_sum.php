<?php
// $arr = [1,2,3,4,5,6,7,8,9,10];
// $sum = 0;
// for($i=0;$i<count($arr);$i++){
//     if($arr[$i]%2==0){
//         $sum+=$arr[$i];
//     }
// }
// echo "the sum of even numbers in the given array : ".$sum;



function sum($arr){
    $even = 0;
    $odd = 0;

    for($i=0;$i<count($arr);$i++){
        if($arr[$i]%2==0){
            $even+=$arr[$i];
           
        }

        else{
            $odd+=$arr[$i];
        
        }
     

    }
    echo "the sum of the even numbers in this array is : ".$even;
    echo "<br>";
    echo "the sum of the odd numbers in this array is : ".$odd;
}
$arr = [1,2,3,4,5,6,7,8];
sum($arr);

?>