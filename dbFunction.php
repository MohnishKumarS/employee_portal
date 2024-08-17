<?php

require_once 'Database.php';  

class dbFunction {

    private $conn;

    public function __construct(){
        
        $db = new dbConnect();  
        $this->conn = $db->getConnection();
    }

    // destructor  
    public function __destruct() {  
        $this->conn = null; // Close the connection when the object is destroyed
    }  


    public function userRegister($name,$email,$pass){

        $query = "INSERT INTO users(`name`,email,`password`) VALUES ('$name', '$email','$pass')";
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            return true;
        } else {
            return false;  
        }

    }

    public function isUserExist($emailid) {  
        $query = "SELECT * FROM users WHERE email = '$emailid'";
        $result = mysqli_query($this->conn, $query);

        if ($result) {
            $row = mysqli_num_rows($result);  

            if ($row > 0) {  
                return true;  
            } else {  
                return false;  
            }  
        }
    }


    public function login($emailid, $pass) {  
       
        $query = "SELECT * FROM users WHERE email = '$emailid' AND `password` = '$pass'";
        $result = mysqli_query($this->conn, $query);
        // echo $result->num_rows;
        if ($result->num_rows) {
            $user_data = mysqli_fetch_assoc($result);        
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $user_data['id'];
                $_SESSION['role'] = $user_data['role'];
            return true;

        }else{
            return false;
        }
    } 
}
?>