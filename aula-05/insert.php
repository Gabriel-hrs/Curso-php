<?php
//Chamada para o arquivo de conexão com o banco
include('conecta_sql.php');

//Valores criados para serem recebidos na tabela
$categoria_id = 2;
$nome = 'CG 150';
$descricao = 'Moto da Honda';
$preco = '10000';
$estoque = 10;
$imagem = 'cg.jpg';

//Comando SQL para inserir valores na tabela
$strsql = "INSERT into produtos (categoria_id, nome, descricao, preco, estoque, imagem) values ($categoria_id, '$nome', '$descricao', $preco, $estoque, '$imagem')";

//Saída no comando SQL
//echo $strsql . PHP_EOL;

if (!$banco->query($strsql)) {
  exit($banco->error);
}

$id = $banco->insert_id;

echo "Produto $id criado com sucesso!" . PHP_EOL;
?>
