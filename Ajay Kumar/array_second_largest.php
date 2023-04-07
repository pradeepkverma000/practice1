<?php
$arr = [2,4,11,5,8,10,7,5];
$first=0;
$second =0;
// using for loop;
// for($i=0;$i<count($arr);$i++){
//     if($first<$arr[$i]){
//         $second = $first;
//         $first = $arr[$i];
//     }
//     elseif($second<$arr[$i])
//     {
        
//         $second=$arr[$i];
//     }
//     else{
        
//     }
// }
// echo "first number ".$first."<br>";
// echo "second number ".$second;


//  while loop;
$i=0;
while($i<count($arr)){
    if($first<$arr[$i]){
        $second = $first;
        $first = $arr[$i];
    }
    elseif($second<$arr[$i]){
        $second=$arr[$i];
    }
   
    else{

    }
    $i++;
}
echo "the largest number of the array".$first."<br>";
echo "the second largest number is ".$second;
