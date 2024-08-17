<?php
require '../../Database.php';
class Employee extends Database
{

  private $conn;

  public function __construct()
  {
    parent::__construct();
    $this->conn = $this->getConnection();
  }

  public function create($data)
  {
    $sql = "INSERT INTO employees (emp_id, emp_name, emp_dep, emp_mobile, emp_doj, emp_email, emp_pass,created_at) VALUES (?, ?, ?, ?, ?, ?, ?,CURRENT_TIMESTAMP)";
    $stmt = $this->conn->prepare($sql);

    if ($stmt) {
      // Bind the parameters
      $hashedPassword = password_hash($data['emp_pass'], PASSWORD_DEFAULT);
      $stmt->bind_param(
        "sssssss",
        $data['emp_id'],
        $data['emp_name'],
        $data['emp_dep'],
        $data['emp_mobile'],
        $data['emp_doj'],
        $data['emp_email'],
        $hashedPassword
      );

      $res = $stmt->execute();
      $stmt->close();

      return $res;
    } else {
      // Return false if the statement preparation failed
      return false;
    }
  }
}
