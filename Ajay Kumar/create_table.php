<?php
// connecting to the database;
$servername ="localhost";
$username= "root";
$password = '';
$database = 'db_harry';

// create a connection;
$conn = mysqli_connect($servername,$username,$password,$database);

// Die if connection was not successful;
if(!$conn){
    die('sorry we failed to connect : '.mysquli_connect_error());
}
else{
    echo "connection was successful<br>";
}
// create a table;


$sql = "create table students(id int AUTO_INCREMENT PRIMARY KEY,name varchar(20),batch varchar(20));";
$result = mysqli_query($conn,$sql);
if($result){
    echo "Table created successfully";
}
else{
    echo "Table does not created successfully because of the error---> ".mysqli_error($conn);
}



?>