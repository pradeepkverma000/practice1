<?php
include('db.php');
if(isset($_POST['register'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$image = $_FILES['image']['name'];
$tmpfile = $_FILES['image']['tmp_name'];
$folder = "image/".$image;
move_uploaded_file($tmpfile,$folder);
$query = "insert into employee(name,email,phone,password,image) values('$name','$email','$phone','$password','$image')";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:fetch.php");
}

}
?>