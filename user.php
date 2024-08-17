<?php

class user{

  private $db;
  private $connection;

  public function __construct($db)
  {
    $this->db = $db;
    $this->connection = $this->db->getConnection();
  }
}


?>