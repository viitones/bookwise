<?php

$mensagem = $_GET['mensagem'] ?? '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $usuario = $database->query(
    query: "SELECT * FROM usuarios WHERE email = :email AND senha = :senha",
    params: compact('email', 'senha')
  )->fetch();

  if ($usuario) {
    $_SESSION['auth'] = $usuario;
    $_SESSION['mensagem'] = 'Seja bem vindo ' . $usuario['nome'] . '!';
    header('Location: /');
    exit();
  }
}

view('login', compact('mensagem'));
