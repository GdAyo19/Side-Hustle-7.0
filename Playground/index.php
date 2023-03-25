 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
        include 'header.php';
    ?>
    <p>Welcome!</p>
    <?php
        // function sayHello() {
        //     echo "hello";
        // }

        // sayHello()

        // function multi($num1, $num2) {
        //     $ans = ($num1 * 8) + $num2;
        //     return $ans;
        // } 
        // echo multi(3,4);
            

            $insert_data = mysqli_query($db_connect, 
            "INSERT INTO students(name, age, gender) VALUES('Vera', '21', 'F')");
            if ($insert_data) {
                echo "Yes";
            } else {
                echo "No";
            }
            

    ?>
 </body>
 </html>