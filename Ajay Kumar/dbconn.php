<?php
$conn =mysqli_connect("localhost","root","","db_harry");

if($conn){
    echo "connection created";
}
else{
    echo "connection failed due to the error of---->".mysqli_error($conn);
}
?>