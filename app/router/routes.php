<?php

$routes = [
  '/' => 'HomeController@index',
  '/criar-post' => 'PostController@createPost',
  '/criar-post-persistence' => 'PostController@createPostPersistence',
  '/post/{id}' => 'PostController@getOne',
];
