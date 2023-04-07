<?php
// ways to connect to a Mysql database;
// 1 : MySqli extension =>mysql improved extension;
// 2 : PDO : php data object;



// connecting to the database;
$servername = "localhost";
$username = "root";
$password = "";

// create a connection;
$conn = mysqli_connect($servername,$username,$password);

// die if connection was not succesful;
if(!$conn){
    die("sorry we are failed to connect : ".mysqli_connect_error());
}
else{
    echo "connection succesful";
}





?>