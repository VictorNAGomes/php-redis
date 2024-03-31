<?php

session_start();

class NotFoundController extends RenderView
{

  public function __construct()
  {
  }

  public function index()
  {
    $this->loadView('pages/partials/header', [
      "title" => "Página não encontrada",
    ]);
    $this->loadView('404', []);
    $this->loadView('pages/partials/footer', []);
  }
}
