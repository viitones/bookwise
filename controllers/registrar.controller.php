<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    dump('post');

    $resultado = $database->
      query(
        query: "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)",
        class: null,
        params: [
          'nome' => $_POST['nome'],
          'email' => $_POST['email'],
          'senha' => $_POST['password']
        ]
      );
    dump($resultado);

    header('location: /login?mensagem=Registrado com sucesso!');
    exit();
  }
