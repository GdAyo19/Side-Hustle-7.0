<?php  
    session_start();
?>
<?php 
    include "header.php";
# CTREATE NEW STUDENT 
    if (isset($_POST['save_student'])) {
        $name = $_POST['student_name'];
        $age = $_POST['student_age'];
        $gender = $_POST['student_gender'];

         $insert_data = mysqli_query($db_connect,
            "INSERT INTO student( name, age, gender) VALUES('$name', '$age', '$gender')");
        
            if ($insert_data) {
                header('Location: all-students.php');
            }
    }

    # UPDATE STUDENT 
    if (isset($_POST['edit_student'])) {
        $id = $_POST['student_id'];
        $name = $_POST['student_name'];
        $age = $_POST['student_age'];
        $gender = $_POST['student_gender'];

         $update_student = mysqli_query($db_connect,
         "UPDATE student SET name = '$name', age = '$age', gender = '$gender' WHERE id = '$id'");
         
        
            if ($update_student) {
                header("Location: all-students.php");
            }
    }

    # REGISTER USER
    if(isset($_POST['save_user'])) {
        $name = $_POST['user_name'];
        $email = $_POST['uemail'];
        $pass = $_POST['upass'];
        $cpass = $_POST['ucpass'];

        if($pass !== $cpass){
            exit ("<p>Password does not match</p><a href ='register.php'>Back</a>");

        }

        $user_exist = mysqli_query($db_connect,"SELECT * FROM users WHERE email = '$email'");

        if(mysqli_num_rows($user_exist) > 0) {
            exit ("<p>User already exist!</p><a href ='login.php'>Login</a>"); 
        }

        $cryptic_pass = md5($pass);

        $insert_user = mysqli_query($db_connect, 
        "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$cryptic_pass')");

        if($insert_user){
            header("Location: all-students.php");
        }

    }

    # LOGIN USER 
    if(isset($_POST['login_user'])){
        $email =  $_POST['email']; 
        $pw = $_POST['password'];

        $find_user =  mysqli_query($db_connect,"SELECT * FROM users WHERE email = '$email'");
        
        if(!mysqli_num_rows($find_user)){
            exit("<p>User does not exist!</p>
            <p><a href ='register.php'>Register</a></p><a href ='login.php'>Login</a> ");
        }

        $user_details = mysqli_fetch_assoc($find_user);

        $cryptic_pass = md5($pw);

        if($cryptic_pass !== $user_details['password']){
            exit("<p>Incorrect Password!</p><a href ='login.php'>Login</a> ");
        }
         $_SESSION["login"] = true;
         $_SESSION['id'] = $user_details['id'];

         header("Location: all-students.php");

    }
    
?>