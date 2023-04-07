<?php
session_start();
include ('db_conn.php');

if(isset($_POST['delete_student'])){
     $id = mysqli_real_escape_string($conn,$_POST['delete_student']);
     $query = "delete from students where id='$id'";
     $query_run = mysqli_query($conn,$query);
     if($query_run){
        $_SESSION['message']= 'Student data Deleted successfully';  
        header("Location:index.php");
        exit(0);
     }
     else{
        $_SESSION['message']= 'Student data Not Deleted successfully';  
        header("Location:index.php");
        exit(0);
         
     }
}

if(isset($_POST['update_student'])){

    // $id = mysqli_real_escape_string($conn,$_POST['id']);
    // $name = mysqli_real_escape_string($conn,$_POST['name']);
    // $email = mysqli_real_escape_string($conn,$_POST['email']);
    // $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    // $course = mysqli_real_escape_string($conn,$_POST['course']);
    // $query = "update students set name='$name', email='$email', phone='$phone', course='$course' where id ='$id'";
    // $query_run = mysqli_query($conn, $query);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "update students set name='$name', email='$email', phone='$phone', course='$course' where id ='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message']= 'Student data updated successfully';  
        header("Location:index.php");
        exit(0);
    }
    else{
        $_SESSION['message']= 'Student data not updated successfully';  
        header("Location:index.php");
        exit(0);
    }
}

if(isset($_POST['submit'])){
    

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $course = mysqli_real_escape_string($conn,$_POST['course']);


    $query = "insert into students(name,email,phone,course) values('$name','$email','$phone','$course')";
    $query_run = mysqli_query($conn,$query);
    if($query_run){
        $_SESSION['message']= 'Student data inserted successfully';  
        header("Location:index.php");
        exit(0);
    }
    else{
        $_SESSION['message']= 'Student data not inserted successfully';  
        header("Location:index.php");
        exit(0);
    }
}
?>