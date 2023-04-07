<?php
$conn = mysqli_connect("localhost","root","","db_harry");
if($conn){
    echo "connection stablish<br>";
}

$query = "delete from form where id='6';";
$result = mysqli_query($conn,$query);
if($result){
    echo "Data deleted successfully";
}
else{
    echo "Data is not deleted because of the error---->".mysqli_error($conn);
}
?>