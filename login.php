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

    <h2> Login </h2>

    <form action="process.php" method="post">
        <label for="">Email</label>
        <input type="email" name="email" required><br><br>

        <label for="">Password</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login" name="login_user">
    </form>
    <br>
    <a href="register.php">Register</a>
</body>
</html>