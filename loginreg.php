<?php 

require_once 'Database.php';
require_once 'dbFunction.php';


if (isset($_POST['login_submit'])) {
    // Retrieve form data

//    $data =$_POST;
//    print_r($data);
    $pass = $_POST['password'];
    $emailid = $_POST['email'];
    // Create an instance of dbFunction
    $dbFunction = new dbFunction();
  
    $sql = $dbFunction->login($emailid, $pass);
    print_r($sql);
    // echo $sql;

}

?>