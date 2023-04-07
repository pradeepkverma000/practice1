<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Associative array -->

    <?php
    $favCol = array(
        'shubam'=> 'red',
        'aman'=>'green',
        'ajay'=>'blue'
    );
    // echo $favCol['shubam'];
    // foreach($favCol as $value){
    //     echo $value;
    // }  // it will return the value of the keys

    foreach($favCol as $key=>$value){
        echo "favorite color of $key is $value <br>";
    }
    ?>
</body>
</html>