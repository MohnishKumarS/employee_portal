<?php 
session_start();
require_once 'Database.php';
require_once 'dbFunction.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['register_submit'])){
    $username = $_POST['name'];
    $emailid = $_POST['email'];
    $pass = $_POST['password'];
    $dbFunction = new dbFunction();


    if ($dbFunction->isUserExist($emailid)) {
        $_SESSION['error_msg'] = "User already registered with this email address";
         header("location:register.php");
    } else{
        if ($dbFunction->userRegister($username, $emailid,$pass)) {
            $_SESSION['success_msg'] = "Registration successful";
            header("location:login.php");
        } else {
            $_SESSION['error_msg'] = "Registration failed";
             header("location:register.php");
        }

    }

}

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['login_submit'])){
        
        $pass = $_POST['password'];
        $emailid = $_POST['email'];
        // Create an instance of dbFunction
        $dbFunction = new dbFunction();
    
        $login_check = $dbFunction->login($emailid, $pass);

         if($login_check){
            // print_r($_SESSION);
            //  $_SESSION['success_msg'] = "Login successful";
            if($_SESSION['role'] == 'admin'){
                header("location:admin/index.php");
            }else{
                header("location:user/index.php");
            }
            //  header("location:index.php");
         }else{
             $_SESSION['error_msg'] = "Invalid email or password";
             header("location:login.php");
         }

    }
    
    }



?>