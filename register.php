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
    include 'header.php';
?>    

<h2>Register</h2>

<form action="process.php" method="post">
    <label for="">Name:</label>
    <input type="text" name="user_name" required><br><br>
    
    <label for="">Email:</label>
    <input type="text" name="uemail" required><br><br>

    <label for="">Password:</label>
    <input type="password" name="upass" required><br><br>

    <label for="">Comfirm Password:</label>
    <input type="password" name="ucpass" required><br><br>

    <input type="submit" value="Resgister" name="save_user">
</form>

</body>
</html>