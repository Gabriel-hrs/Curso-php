<?php
//Dados do banco
$host = 'localhost';
$user = 'root';
$password = 'senha';
$db = 'verao-2019';

//Junção dos dados do banco
$banco = new mysqli($host, $user, $password, $db);

//Caso não conecte ao banco
if (mysqli_connect_errno()) {
  exit("Não foi possível conectar ao banco de dados!");
} else {
  //Saída na confirmação de conexão com o MySQL
  echo 'Conectou-se com o MySQL' . PHP_EOL;
}
?>
