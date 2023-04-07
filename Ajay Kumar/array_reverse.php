<?php
// program to reverse the array;
$arr =[1,2,3,4,5,6];
// using for loop;
// for($i= sizeof($arr)-1;$i>=0;$i--){
//     echo $arr[$i];
// }

//  using while loop;
$i = sizeof($arr)-1;
while($i>=0){
    echo $arr[$i];
    echo "<br>";
    $i--;
}

?>