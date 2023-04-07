<?php
// find the sum of the values of the array;

$arr = [ 1,2,3,4,5,6];
$sum = 0;
for($i=0;$i<count($arr);$i++){
    $sum+=$arr[$i];
}
echo "The sum of the Array :".$sum;
?>