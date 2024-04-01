<?php

session_start();

class PostController extends RenderView
{
  public function __construct()
  {
  }

  public function createPost()
  {
    $this->loadView('pages/partials/header', [
      "title" => "Home"
    ]);
    $this->loadView('pages/createPost', []);
    $this->loadView('pages/partials/footer', []);
  }

  public function createPostPersistence()
  {
    $msg = [];

    $post = new PostModel();

    $title = $_POST['postTitle'];
    $desc = $_POST['postDesc'];
    $content = $_POST['postContent'];
    if (!isset($_POST['postTitle']) || empty($_POST['postTitle'])) {
      $msg['error'] = "Preencha o campo título do Post!";
      header("location: " . BASE_URL . 'criar-post');
    } else if (!isset($_POST['postDesc']) || empty($_POST['postDesc'])) {
      $msg['error'] = "Preencha o campo Descrição do Post!";
      header("location: " . BASE_URL . 'criar-post');
    } else if (!isset($_POST['postContent']) || empty($_POST['postContent'])) {
      $msg['error'] = "Preencha o campo Conteúdo do Post!";
      header("location: " . BASE_URL . 'criar-post');
    } else {
      if ($post->create($title, $desc, $content)) {
        $msg['success'] = "Post criado com sucesso!";
        header("location: " . BASE_URL);
      } else {
        $msg['error'] = "Desculpa, algo deu errado, tente mais tarde!";
        header("location: " . BASE_URL . 'criar-post');
      }
    }
  }
  public function getOne($id)
  {
    $post = new PostModel();

    $postResult = $post->getOne($id[0])[0];

    $this->loadView('pages/partials/header', [
      "title" => "Home"
    ]);
    $this->loadView('pages/post', [
      "post" => $postResult
    ]);
    $this->loadView('pages/partials/footer', []);
  }
}
