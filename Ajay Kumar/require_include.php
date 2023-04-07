<?php
// include-----> will not give error if any syntax error occur in the program,
// if the file is not present from which we want to connect than it will simply give a warning and then execute the next line;
// include('dbconn.php');




require 'dbconn.php';
//  require()---->if aby error occur in the program than it will stop the execution and will     give the error;
// if the file is not present from which we want to connect than it will give a warning and will not execute the next line;
$query = "select * from form";
$result = mysqli_query($conn,$query);
while($num=mysqli_fetch_assoc($result))
{
    echo "<pre>";
    print_r($num);
    echo "</pre>";
}


?>