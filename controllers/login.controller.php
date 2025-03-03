<?php
// dump($_SESSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacao = Validacao::validar([
    'nome' => ['required'],
    'email' => ['required', 'email'],
    'senha' => ['required']
  ], $_POST);

  if($validacao->falhou('login')) {
    header('location: /login');
    exit();
  }

  $usuario = $database->query(
    query: "SELECT * FROM usuarios WHERE email = :email AND senha = :senha",
    class: Usuario::class,
    params: compact('email', 'senha')
  )->fetch();

  // dd($usuario);

  if ($usuario) {
    $_SESSION['auth'] = $usuario;

    flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');
    header('Location: /');
    exit();
  }
}

view('login');
