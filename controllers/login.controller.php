<?php
// dump($_SESSION);

// dd(password_hash('123123#', PASSWORD_BCRYPT));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $validacao = Validacao::validar([
    'email' => ['required', 'email'],
    'senha' => ['required']
  ], $_POST);

  if($validacao->falhou('login')) {
    header('location: /login');
    exit();
  }

  $usuario = $database->query(
    query: "SELECT * FROM usuarios WHERE email = :email",
    class: Usuario::class,
    params: compact('email')
  )->fetch();

  // dd($usuario);

  if ($usuario) {
    if (! password_verify($_POST['senha'], $usuario->senha)) {
      flash()->push('validacoes_login', ['Usuário ou senha não encontrados!']);
      header('location: /login');
      exit();
    };

    $_SESSION['auth'] = $usuario;

    flash()->push('mensagem', 'Seja bem vindo ' . $usuario->nome . '!');
    header('location: /');
    exit();
  }
}

view('login');
