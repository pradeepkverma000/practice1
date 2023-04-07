<?php
include('db.php');
$id = $_GET['id'];
$query = "select * from employee where id = $id";
$result = mysqli_query($conn,$query);
?>
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
    while($fetch = mysqli_fetch_assoc($result))
    {
    ?>
    <form action = "update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value='<?= $fetch['id']; ?>'><br>
        <input type="text" name="name" value='<?= $fetch['name']; ?>'><br>
        <input type="email" name="email" value='<?= $fetch['email']; ?>'><br>
        <input type="text" name="phone" value='<?= $fetch['phone']; ?>'><br>
        <input type="password" name="password" value='<?= $fetch['password'];?>'><br>
        <input type="file" name="image" value='<img src="./image/<?= $fetch['image'];?>" alt="" width="75px" height="75px";>'><br>
        <input type="submit" name="update" value="update">
    </form>
    <?php
    }
    ?>
</body>
</html>