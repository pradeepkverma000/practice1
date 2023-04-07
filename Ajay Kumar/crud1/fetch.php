<?php
include('db.php');
$query = "select * from employee";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
   
</head>
<body>
    <div class="container mt-5">
        <a href="create.php" class=" btn btn-primary mb-3">ADD STUDENTS</a>
    <table border=2 class = " table table-dark">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL_ID</th>
            <th>PHONE</th>
            <th>PASSWORD</th>
            <th>IMAGE</th>
            <th>ACTION</th>
        </tr>
        <?php

        while($fetch =mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?= $fetch['id'];?></td>
            <td><?= $fetch['name'];?></td>
            <td><?= $fetch['email'];?></td>
            <td><?= $fetch['phone'];?></td>
            <td><?= $fetch['password'];?></td> 
            <td ><img src="./image/<?= $fetch['image'];?>" alt="" width="75px" height="75px";></td> 
            
            <td><a href='edit.php?id=<?= $fetch['id'];?>' class = "btn btn-info" >EDIT</a>&nbsp; &nbsp;<a href='delete.php?id=<?= $fetch['id'];?>' class = "btn btn-danger" >DELETE</a></td>

        </tr>
        <?php
         }
        ?>
    </table>

</body>
</html>