<?php 
    require "sessionStart.php";
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
   include 'header.php';

   $students = mysqli_query($db_connect, 'SELECT * FROM student');
?>
<a href="create-student.php">Add new Student</a><br><br>
<a href="logout.php">LogOut</a>
<h2>All Student</h2>
<table>
    <thead>
        <td>S/N</td>
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td> Action </td>
    </thead>
    <tbody>
        <?php foreach($students as $student): ?>
            <tr>
                <td><?= $student['id'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['age'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td>
                    <a href="view-students.php?id=<?= $student['id']?>">View</a>
                    <a href="edit-student.php?id=<?= $student['id']?>">Edit</a>
                    <a href="delete-student.php?id=<?= $student['id']?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

</body>
</html>


