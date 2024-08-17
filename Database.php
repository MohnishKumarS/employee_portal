
<?php

class dbConnect {

    private $conn;

    public function __construct()
    {
        define("DB_HOST", 'localhost');  
        define("DB_USER", 'root');  
        define("DB_PASSWORD", '');  
        define("DB_DATABASE", 'employee_portal');  

        // Correct usage of constants
        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if (!$this->conn) {  // Testing the connection  
            die("Cannot connect to the database");  
        }
    }
    
    public function getConnection()
    {
        return $this->conn;
    }

    public function close()
    {  
        mysqli_close($this->conn);
    }
}

// class DB {
//     function connection() {
//         $con = mysqli_connect('localhost', 'root', '', 'employe_portal');
//         if (!$con) {
//             die('Connection error' . mysqli_connect_error());
//         }
//       return $con;  
//     }
// }
// $dobj=new DB();
// $dobj->connection();

// class Database {
//     private $host = "localhost";
//     private $username = "root";
//     private $password = "";
//     private $database = "employe_portal";
//     public $connection;

//     public function __construct() {
//         // Establish connection using MySQLi
//         $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

//         // Check connection
//         if ($this->connection->connect_error) {
//             die("Connection failed: " . $this->connection->connect_error);
//         }
//     }

//     // Get the connection
//     public function getConnection() {
//         return $this->connection;
//     }
// }




?>