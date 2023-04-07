<?php
$arr = [1,2,3,4,5,6,7,8,9];
$even = 0;
$odd = 0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]%2==0){
        $even +=1;
    }
    else{
        $odd +=1;
    }
}
echo "the number of even numbers in the array are : ".$even;
echo "<br>";
echo "The number of odd numbers in the array are : ".$odd;
?>