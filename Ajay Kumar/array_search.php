<?php
$arr = [1,2,4,8,9,7,6,3];
// using for loop;
$s = 12;
$flag = 0;
// for($i=0;$i<count($arr);$i++){
//     if($arr[$i]==$s){
//         $flag +=1;
//         break;
//     }
  
// }
// if($flag>0){
//     echo "yes $s exist here";
// }
// else{
//     echo "sorry $s not exists here";
// }

$i=0;
while($i<count($arr)){
    if($arr[$i]==$s){
        $flag +=1;
        break;
    }
    $i++;
}
if($flag>0){
    echo "yes $s is exist here";
}
else{
    echo "sorry $s is not exist here";
}
?>