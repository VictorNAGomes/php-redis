<?php

session_start();

class HomeController extends RenderView
{
  public function __construct()
  {
  }

  public function index()
  {
    $this->loadView('pages/partials/header', [
      "title" => "Home"
    ]);
    $this->loadView('pages/home', []);
    $this->loadView('pages/partials/footer', []);
  }

  public function createPost()
  {
    $this->loadView('pages/partials/header', [
      "title" => "Home"
    ]);
    $this->loadView('pages/createPost', []);
    $this->loadView('pages/partials/footer', []);
  }
}
