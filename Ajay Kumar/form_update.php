<?php
$conn = mysqli_connect("localhost","root","","db_harry");
if($conn){
    echo "connection stablish<br>";
}

$query = "update form set email='ajaykumarbagwan@gmail.com' where id='1';";
$result = mysqli_query($conn,$query);
if($result){
    echo "data updated successfully";
}
else{
    echo "data does not updated because of---->".mysqli_error($conn);
}
?>