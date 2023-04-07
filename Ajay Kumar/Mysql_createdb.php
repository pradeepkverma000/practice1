<?php
$servername ="localhost";
$username= "root";
$password = '';

// create a connection;
$conn = mysqli_connect($servername,$username,$password);

// Die if connection was not successful;
if(!$conn){
    die('sorry we failed to connect : '.mysquli_connect_error());
}
else{
    echo "connection was successful<br>";
}
// create database;
$sql = "create database db_harry";
$result = mysqli_query($conn,$sql);

// check for the database creation success;
if($result){
    echo "the db was created successfully!";
}
else{
    echo "The db was not created successfully because of this error---->".mysqli_error($conn);
}
echo "the result is ";
echo var_dump($result);
echo "<br>";


?>