<?php

class Livro
{
  public $id;
  public $titulo;
  public $autor;
  public $descricao;

  public $ano_de_lancamento;

  public $usuario_id;
  public $nota_avaliacao;
  public $count_avaliacoes;

  public function query($where, $params)
  {

    $database = new Database(config('database'));

    return $database->query(
      query: " 
      select 
        l.id, l.titulo, l.autor, l.descricao, l.ano_de_lancamento,
        ifnull(round(sum(a.nota) / 5.0), 0) as nota_avaliacao, 
        ifnull(count(a.id), 0) as count_avaliacoes
      from
        livros l
        left join avaliacoes a on a.livro_id = l.id
      where
        $where
      group by
        l.id,
        l.titulo,
        l.autor, 
        l.descricao,
        l.ano_de_lancamento
      ",
      class: self::class,
      params: $params
    );
  }

  public static function get($id)
  {
    return (new self)->query('l.id = :id', compact('id'))->fetch();
  }

  public static function all($filtro = '')
  {
    return (new self)->query('titulo like :filtro', ['filtro' => "%$filtro%"])->fetchAll();
  }


  public static function meus($usuario_id)
  {

    return (new self)->query('l.usuario_id = :usuario_id', compact('usuario_id'))->fetchAll();
  }
}
