<?php
//Chamada para o arquivo de conexão com o banco
include('conecta_sql.php');

//Consulta pelos valores na tabela produtos
$strsql = "select * from produtos";

//Comparação dos valores recebidos e dos valores do banco
$statement = $banco->prepare($strsql);

//Verifica se há algum erro de sintaxe na query
if (!$statement) {
  exit($banco->error);
}

//Verifica se há algum erro na execução do programa
if ($statement->execute()) {
  exit($banco->error);
}

//Resultados dos valores recebidos
$resultados = $statement->get_result();

//Retorna resultados a cada linha, passando por todos valores
while ($linha = $resultados->fetch_object()) {
  print_r($linha);
}

//Saída na confirmação de conexão com o MySQL
echo 'conecta com o mysql' . PHP_EOL;
?>
