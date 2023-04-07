<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        .container{
            
            background-color:rgb(230, 163, 175);
            width:500px;
            height:305px;
            margin:150px 0 0 400px;
            border:2px solid black;
            
        }
        
    </style>
    
</head>
<body>
    <div class="container">
    <fieldset  ><legend>Enter data</legend>
        <form action="register.php" method="POST" enctype="multipart/form-data" >
            <label>Name</label><br>
            <input type="text" name="name" placeholder="name"><br><br>
            <label>Email_id</label><br>
            <input type="email" name="email" placeholder="email_id"><br><br>
            <label>Phone</label><br>
            <input type="text" name="phone" placeholder="phone_no"><br><br>
            <label>Password<label><br>
            <input type="password" name="password"  placeholder="password"><br><br>
            <label>Upload Image</label><br>
            <input type="file" name="image">
            <input type="submit" name="register" value="register">
        </form>
    </fieldset>
    </div>
</body>
</html>