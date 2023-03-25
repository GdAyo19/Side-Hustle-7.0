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
    function multiply($num1, $num2, $num3 = 5){
      $ans = $num1 * $num2 * $num3;
        return $ans;
    }
    echo multiply(6,7);

    ?>
    <p></p>
    <?php 
        include 'connect.php';
        $connect = $db_connect;
        if ($connect) {
            echo "yes";
        } else {
            ECho "no";
        }
        
    ?>
</body>
</html>