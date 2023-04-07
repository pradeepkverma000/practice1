<?php

$conn = mysqli_connect("localhost",'root',"","db_harry");
// if($conn){
//     echo "connection created";
// }
$email =$_POST['email'];
$password = $_POST['password'];
$query = "insert into form(email,password) values('$email','$password');";
$result = mysqli_query($conn,$query);
if($result){
    echo "data inserted successfully";
}
else{
    echo "data does not inserted because of the error--->".mysqli_error($conn);
}
?>