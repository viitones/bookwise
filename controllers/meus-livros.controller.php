<?php

if(! auth()){
  header('location: /login');
  exit();
}

$livros = Livro::meus(auth()->id);

view('meus-livros', compact('livros'));