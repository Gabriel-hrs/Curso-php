<?php
  //Chamada para o arquivo de conexão com o banco
  include('conecta_sql.php');

  //Declaração dos estados do formulário
  $erros = array();
  $sucessos = array();

  print_r($_POST). PHP_EOL;

  //Declaração das váriaveis do formulário
  $nome = '';
  $sexo = '';
  $email = '';
  $telefone = '';
  $senha = '';
  $senhaConfirmacao = '';

  if (count($_POST) > 0) {

    //Validação do campo nome
    if( $_POST['nome'] == true ){
      $nome = trim($_POST['nome']);
      $nome = strtolower($nome);
      $nome = ucwords($nome);
    } else {
      $erros[] = 'Digite seu nome!';
    }

    //Validação do campo sexo
    if (isset($_POST['sexo'])) {
      $sexo = $_POST['sexo'];
    } else {
      $erros[] = 'Escolha o Sexo!';
    }

    //Validação do campo email
    $email = $_POST['email'];
    if($email == '') {
      $erros[] = 'Digite seu email!';
    }

    //Validação do campo telefone
    $telefone = $_POST['telefone'];
    if($telefone == '') {
      $erros[] = 'Digite seu telefone!';
    }

    //Validação do campo senha
    $senha = $_POST['senha'];
    if(strlen($senha) < 6) {
      $erros[] = 'Sua senha deve conter no mínimo 6 digitos!';
    }

    //Validação do campo de confirmação da senha
    $senhaConfirmacao == $_POST['senhaConfirmacao'];
    if ($senha != $senhaConfirmacao){
      $erros[] = 'A senha e a confirmarção devem ser iguais!';
    }

  }//count($_POST)

  //Validação de erros
  if(count($erros) == 0){
      $senhaCripto = md5($senha);
      $strsql = "INSERT INTO clientes (id, nome, sexo, email, telefone, senha) VALUES ('$nome', '$sexo', '$email', '$telefone', '$senhaCripto')";

      echo $strsql;

      if (!$banco->query($strsql)) {
        exit($banco->error);
      }

      $id = $banco->insert_id;

      echo $id;

      $sucessos[] = 'Cliente cadastrado com sucesso!';
      //header('Location: login.php');
  }

  //Saída nas váriaveis do formulário
  echo $nome . PHP_EOL;
  echo $sexo . PHP_EOL;
  echo $email . PHP_EOL;
  echo $telefone . PHP_EOL;
  echo $senha . PHP_EOL;
  echo $senhaConfirmacao . PHP_EOL;
?>

<html>
<head>
  <title>
    <?php
      if($nome == ''){
        echo "Seja Bem-Vindo(a).";
      } else {
        if( isset( $_POST['M'] ) ){
          echo "Seja Bem-Vindo, $nome.";
        } else {
          echo "Seja Bem-Vinda, $nome.";
        }
      }
    ?>
  </title>
</head>

<body>
<?php
  //Verificação de erros
  if(count($erros) > 0) {
    foreach( $erros as $erro ){
      echo "<h3>$erro</h3>";
    }
  }

  //Verificação de sucessos
  if(count($sucessos) > 0) {
    foreach( $sucessos as $sucesso ){
      echo "<h3>$sucesso</h3>";
    }
  }
?>

<form method="post">
  Nome:
  <input type="text" name="nome" value="<?php echo $nome; ?>">
  </br>
  Sexo:
  <input type="radio" name="sexo" value="M" <?php if($sexo == 'M') { echo 'checked="checked"';}?>>  Masculino
  <input type="radio" name="sexo" value="F" <?php if($sexo == 'F') { echo 'checked="checked"';}?>>  Feminino
  </br>
  Email:
  <input type="text" name="email" value="<?php echo $email; ?>">
  </br>
  Telefone:
  <input type="tel" name="telefone" value="<?php echo $telefone; ?>">
  </br>
  Senha:
  <input type="password" name="senha" value="<?php echo $senha; ?>">
  </br>
  Confirme sua senha:
  <input type="password" name="senhaConfirmacao" value="<?php echo $senhaConfirmacao; ?>" <?php if($senha === $senhaConfirmação) { echo 'checked="checked"';}?>>

  </br>
  <input type="submit" value="Salvar">
</form>

</body>

</html>
