<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('location: /meus-livros');
  exit();
}

if(!auth()) {
  abort(403);
}

$usuario_id = auth()->id;
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];
$ano_de_lancamento = $_POST['ano_de_lancamento'];

$validacao = Validacao::validar([
  'titulo' => ['required', 'min:3'],
  'autor' => ['required'],
  'descricao' => ['required'],
  'ano_de_lancamento' => ['required']
], $_POST);

if($validacao->falhou()) {
  header("location: /meus-livros");
  exit();
}


$extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

$newName = md5(uniqid(rand(), true)) . ".$extensao";

$imagem = "images/$newName";

move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);

// dd( $imagem);


$database->query(
  query: 
    "insert into livros (usuario_id, titulo, autor, descricao, ano_de_lancamento, imagem) 
    values (:usuario_id, :titulo, :autor, :descricao, :ano_de_lancamento, :imagem)", 
  params: compact(
    'usuario_id', 'titulo', 'autor', 'descricao', 'ano_de_lancamento', 'imagem'
  )
);

flash()->push('mensagem', 'Livro cadastrado com sucesso!');
header('location: /meus-livros');
exit();