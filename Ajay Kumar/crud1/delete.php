<?php
include('db.php');
$id = $_GET['id'];
$query= "delete from employee where id='$id'";
$result = mysqli_query($conn,$query);
if($result){
    header('LOCATION:fetch.php');
}
else{
    echo "data not delete because of the error-->".mysqli_error($conn);
}
?>