<?php

  $id = $_REQUEST['id'];
  
  $db = new DB();

  $livro = $db->livro($id);


  // dd(dump: $livro);


  view('livro', compact('livro'));
