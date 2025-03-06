<?php

  $livro = $database
  ->query(
    query: "select * from livros where id = :id",
    class: Livro::class,
    params: ['id' => $_GET['id']]
  )->fetch();

    $avaliacoes = $database
    ->query(
      query: "select * from avaliacoes where livro_id = :id",
      class: Avaliacao::class,
      params: ['id' => $_GET['id']]
    )->fetchAll();

  view('livro', compact('livro', 'avaliacoes'));
