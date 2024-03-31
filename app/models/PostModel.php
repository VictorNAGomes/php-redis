<?php

class PostModel extends Database
{
  private $pdo;

  public function __construct()
  {
    $conn = $this->getConnection();
    $this->pdo = $conn;
  }

  public function create()
  {
  }
}
