<?php
// Database class using OOP with procedural MySQLi
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "employe_portal";
    public $connection;

    public function __construct() {
        // Create a connection using procedural MySQLi
        $this->connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        // Check connection
        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    // Method to insert a new user
    public function insertUser($name, $email, $phone) {
        // Hash the password before storing it
     

        // Prepare the SQL query
        $sql = "INSERT INTO demo (name, email, phone) VALUES ('$name', '$email', '$phone')";

        // Execute the query
        if (mysqli_query($this->connection, $sql)) {
            echo "User registered successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->connection);
        }
    }

    // Method to close the database connection
    public function closeConnection() {
        mysqli_close($this->connection);
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a Database object
    $db = new Database();

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert the data into the database
    $db->insertUser($name, $email, $phone);

    // Close the database connection
    $db->closeConnection();
}
?>
