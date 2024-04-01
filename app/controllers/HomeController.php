<?php

session_start();

class HomeController extends RenderView
{
  public function __construct()
  {
  }

  public function index()
  {
    $post = new PostModel();

    $posts = $post->getAll();

    $this->loadView('pages/partials/header', [
      "title" => "Home"
    ]);
    $this->loadView('pages/home', [
      "posts" => $posts
    ]);
    $this->loadView('pages/partials/footer', []);
  }
}
