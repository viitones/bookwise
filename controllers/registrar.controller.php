<?php

  require 'Validacao.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $validacao = Validacao::validar([
      'nome' => ['required'],
      'email' => ['required', 'email', 'confirmed'],
      'senha' => ['required', 'min:6', 'max:30', 'strong']
    ], $_POST);

    if($validacao->falhou()) {
      header('location: /login');
      exit();
    }

    $database-> query(
      query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
      class: null,
      params: [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => $_POST['senha']
      ]
    );

    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
  }
