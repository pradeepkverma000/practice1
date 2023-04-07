<?php

$conn = mysqli_connect("localhost","root",'',"db_harry");
if($conn){
    echo "connection created<br>";
}
$query = "insert into students(name,batch) values('ajay kumar','php');";
$result = mysqli_query($conn,$query);
if($result){
    echo "record has been inserted successfully successfully";
}
else{
    echo "record does not inserted successfully because of the error".mysqli_error($conn);
}
?>