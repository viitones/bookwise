<?php

  // require 'Validacao.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $validacao = Validacao::validar([
      'nome' => ['required'],
      'email' => ['required', 'email', 'confirmed', 'unique:usuarios'],
      'senha' => ['required', 'min:6', 'max:30', 'strong']
    ], $_POST);

    if($validacao->falhou('registrar')) {
      header('location: /login');
      exit();
    }

    $database-> query(
      query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
      class: null,
      params: [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT)
      ]
    );

    flash()->push('mensagem', 'Usuário cadastrado com sucesso!');

    header('location: /login');
    exit();
  }

  header('location: /login');
  exit();
