<?php 
    require "sessionStart.php";
?>
<?php 
        require 'header.php';

        $id = $_GET['id'];

        $delete = mysqli_query($db_connect, "DELETE FROM student WHERE id = '$id' ");

        if($delete){
            header("Location: all-students.php");
        }
    ?>