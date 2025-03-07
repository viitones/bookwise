<?php

if(! auth()){
  header('location: /login');
  exit();
}

$livros = $database->query(
  query: "select * from livros where usuario_id = :id",
  params: ['id' => auth()->id],
  class: Livro::class
);

view('meus-livros', compact('livros'));