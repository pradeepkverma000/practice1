<?php
$conn = mysqli_connect("localhost","root","","db_harry");
if($conn){
    echo "connection created<br>";
}

$query = "select * from form;";
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result); //  it will return the number of rows;
echo $num;
// display the rows returned by the sql;
while( $row = mysqli_fetch_assoc($result)){
    // $row = mysqli_fetch_assoc($result);
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
// if($result){
//     echo "<td>"
// }
?>