<?php
$arr = [2,4,5,8,10,7,12,6,1];
// using for loop;
// $max = $arr[0];
// for($i=0;$i<count($arr);$i++){
//     if($arr[$i]>$max){
//         $max = $arr[$i];
//     }
   
// }
// echo "The largest number in the array is".$max;


// using while loop;
$max = $arr[0];
$i = 0;
while($i<count($arr)){
    if($arr[$i]>$max){
        $max = $arr[$i];
    }
    $i++;

}
echo "the largest number in the array is :".$max;
?>