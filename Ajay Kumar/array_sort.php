<?php

$arr = [5,7,1,4,3,45,12,84,45];
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr);$j++){
        if($arr[$i]<$arr[$j]){
            $swap = $arr[$j];
            $arr[$j]=$arr[$i];
            $arr[$i] = $swap;
        }
    }
}
echo "<pre>";
print_r($arr);
echo "</pre>";
?>