<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $multidim = array(
        array(2,5,4,6,8),
        array(1,2,3,5,6),
        array(4,6,7,9,5)
    );
    // echo var_dump($multidim);
    // echo $multidim[0][3];

    // for($i=0;$i<count($multidim);$i++){
    //     echo var_dump($multidim[$i]);
    //     echo "<br>";
    // }\

    for($i=0;$i<count($multidim);$i++){
        for($j=0;$j<count($multidim[$i]);$j++){
            echo $multidim[$i][$j];
            echo " ";
        }
        echo "<br>";

    }
    
    ?>
</body>
</html>