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

    if ($post->create($title, $desc, $content)) {
      $msg['success'] = "Post criado com sucesso!";
    } else {
      $msg['error'] = "Desculpa, algo deu errado, tente mais tarde!";
    }
  }
}
