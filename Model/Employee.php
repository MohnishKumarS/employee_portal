<?php
require_once DB_CONNECT;
class Employee extends Database
{

  private $conn;

  public function __construct()
  {
    parent::__construct();
    $this->conn = $this->getConnection();
  }

  public function list()
  {
    $sql = "SELECT * FROM employees";
    $res = $this->conn->query($sql);

    if ($res->num_rows > 0) {
      $employees = [];
      while ($row = $res->fetch_assoc()) {
        $employees[] = $row;
      }
      return $employees;
    } else {
      // Return an empty array if no rows were found
      return [];
    }
  }

  public function create($data)
  {
    $sql = "INSERT INTO employees (emp_id, emp_name, emp_dep, emp_mobile, emp_doj, emp_email, emp_pass,created_at) VALUES (?, ?, ?, ?, ?, ?, ?,CURRENT_TIMESTAMP)";
    $stmt = $this->conn->prepare($sql);

    if ($stmt) {
      // Bind the parameters
      // $hashedPassword = password_hash($data['emp_pass'], PASSWORD_DEFAULT);
      $stmt->bind_param(
        "sssssss",
        $data['emp_id'],
        $data['emp_name'],
        $data['emp_dep'],
        $data['emp_mobile'],
        $data['emp_doj'],
        $data['emp_email'],
        $data['emp_pass'],
        // $hashedPassword
      );

      $res = $stmt->execute();
      $stmt->close();

      return $res;
    } else {
      // Return false if the statement preparation failed
      return false;
    }
  }

  public function edit($id)
  {
    $sql = "SELECT * FROM employees WHERE id= $id";
    $res = $this->conn->query($sql);
    if ($res->num_rows > 0) {
      $data = $res->fetch_assoc();
      return $data;
    } else {
      return [];
    }
  }

  public function update($data, $id)
  {
    // return $id;
    $emp_id = $data['emp_id'];
    $name = $data['emp_name'];
    $dep = $data['emp_dep'];
    $mobile = $data['emp_mobile'];
    $doj = $data['emp_doj'];
    $email = $data['emp_email'];

    $sql = "UPDATE employees SET  emp_id = '$emp_id', emp_name = '$name', emp_dep ='$dep',  emp_mobile = '$mobile',  emp_doj = '$doj', emp_email ='$email' WHERE id=$id";
    $stmt = $this->conn->prepare($sql);

    // Execute the statement
    if ($stmt->execute()) {
        return true; 
    } else {
        return false; 
    }
  }


  public function delete($id){
    $sql = "DELETE FROM employees WHERE id =$id";
    $stmt = $this->conn->query($sql);

    if($stmt){
      return true;
    }else{
      return false;
    }

  }
}
