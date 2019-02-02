<?php
include('conecta_sql.php');

$preco = 9000;
$descricao = 'Oferta imperdível!';

$strsql = "UPDATE produtos SET preco = $preco, descricao = '$descricao', WHERE id = $id"

if (!$banco->query($strsql)) {
  exit($banco->error);
}

echo "Produto $id atualizado com sucesso!" . PHP_EOL;
?>
