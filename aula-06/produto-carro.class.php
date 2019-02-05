<?php
class Produto {
  private $id;
  private $nome;
  private $descricao;
  private $preco;
  private $estoque;
  private $imagem;

  public function __construct($id, $nome, $descricao, $preco, $estoque, $imagem) {
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->preco = $preco;
    $this->estoque = $estoque;
    $this->imagem = $imagem;
  }

  public function atualizaPreco($preco) {
    $this->preco = $preco;
  }
}

class Carro extends Produto {
  private $placa = '';

  public function setPlaca($placa) {
    $this->placa = $placa;
  }
}

$corsa = new Produto(1, 'Corsa', 'Chrevolet ano 2000', 12000, 1, 'corsa.jpg');
$corsa->setPlaca('ABC-123');

print_r($corsa);
?>
