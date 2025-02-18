<?php

  require 'dados.php';


  $id = $_REQUEST['id'];

  $arrayFiltrado = array_filter($livros, fn($l) => $l['id'] == $id);

  $livro = array_pop($arrayFiltrado);


  view('livro', compact('livro'));
