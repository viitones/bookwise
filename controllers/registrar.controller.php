<?php

  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $validacoes = [];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $email_confirmacao = $_POST['email_confirmacao'];
    $senha = $_POST['password'];

    if(strlen($nome) == 0) {
      $validacoes[] = 'O campo nome é obrigatório';
    }

    if(strlen($email) == 0) {
      $validacoes[] = 'O campo email é obrigatório';
    }

    if(! filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $validacoes[] = 'O email informado é inválido';
    }

    if($email != $email_confirmacao) {
      $validacoes[] = 'Os emails informados não são iguais';
    }

    if(strlen($senha) == 0) {
      $validacoes[] = 'O campo senha é obrigatório';
    }

    if(strlen($senha) < 8 || strlen($senha) > 16) {
      $validacoes[] = 'A senha deve ter entre 8 e 16 caracteres';
    }

    if(! str_contains($senha, '*')) {
      $validacoes[] = 'A senha deve conter pelo menos um asterisco';
    }

    if(count($validacoes) > 0) {
      $_SESSION['validacoes'] = $validacoes;
      header('location: /login');
      exit();
    }

    $database-> query(
      query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
      class: null,
      params: [
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'senha' => $_POST['password']
      ]
    );

    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
  }
