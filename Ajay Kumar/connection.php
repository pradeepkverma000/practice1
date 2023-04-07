<?php
$conn = new mysqli("localhost","root","","chetu");

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];

$sql = "insert into student(name,email_id,contact_no)values('$name','$email','$contact')";

$result=mysqli_query($conn,$sql);
if($result){
    echo "Data stored";
}

   
?>