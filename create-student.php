<?php 
    require "sessionStart.php";
?>
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
        
        <h2> Student </h2>
    
    <form action="process.php" method="post">
    <label for="">Name:</label>
    <input type="text" name="student_name">
    <p></p>

    <label for="">Age:</label>
    <input type="text" name="student_age">
    <p></p>

    <label for="">Gender:</label>
    <select name="student_gender">
        <option value="">Select Gender</option>
        <option value="M">Male</option>
        <option value="F">Female</option>
        
    </select>
    <p></p>
    <input type="submit" value="Save" name="save_student">

    </form>
 </body>
 </html>