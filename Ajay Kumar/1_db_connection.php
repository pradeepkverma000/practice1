<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border:2px solid black;
            width:500px;
            text-align: center;
            
        }
    </style>
</head>
<body>
  
    <div class="container">
        <form action="connection.php" method="POST">
            <input type="text" name="name" placeholder="Name"><br><br>
            <input type="email" name="email" placeholder="email"><br><br>
            <input type="text" name="contact" placeholder="contact"><br><br>
           
            <input type="submit" name="submit"> 
        </form>
    </div>
    
</body>
</html>