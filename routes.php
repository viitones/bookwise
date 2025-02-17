<?php

function carregarController( ) {

$controller = 'index';

if (isset($_SERVER['PATH_INFO'])) {
  $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
};


  $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

  if (! $controller) $controller = 'index';

  if( ! file_exists("./controllers/{$controller}.controller.php") ) {
    http_response_code(404);
    echo "Controller not found";
    die();
  };


 require "./controllers/{$controller}.controller.php";
};

carregarController();