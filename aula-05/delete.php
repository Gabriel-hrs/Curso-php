<?php
include('conecta_sql.php');

$id = 7;

$strsql = "DELETE FROM produtos WHERE id = $id";

if (!$banco->query($strsql)) {
  exit($banco->error);
}

echo "Produto $id removido com sucesso!" . PHP_EOL;
?>
