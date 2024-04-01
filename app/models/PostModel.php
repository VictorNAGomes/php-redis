<?php

class PostModel extends Database
{
  private $pdo;

  public function __construct()
  {
    $conn = $this->getConnection();
    $this->pdo = $conn;
  }

  public function create($title, $desc, $content)
  {
    try {
      $stm = $this->pdo->prepare("INSERT INTO posts (title, descricao, conteudo) VALUES (?, ?, ?)");
      $stm->execute([$title, $desc, $content]);

      if ($this->pdo->lastInsertId() > 0) {
        return true;
      } else {
        return false;
      }
    } catch (PDOException $e) {
      return false;
    }
  }

  public function getAll()
  {
    try {
      $stm = $this->pdo->query("SELECT * FROM posts;");

      if ($stm->rowCount() > 0) {
        return $stm->fetchAll(PDO::FETCH_ASSOC);
      } else {
        return false;
      }
    } catch (PDOException $e) {
      return false;
    }
  }
}
