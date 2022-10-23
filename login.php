<?php
include('conectar.php');

//verificar se variaveis existem
if (isset($_POST['email']) || isset($_POST['senha'])) {

  //verifica email vazio | strlen - Quantidade caracteres
  if (strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
  } else if (strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  } else {
    //faz isso

    //limpar email | Segurança SQL injection | Função
    //$con = $mysqli
    $email = $con->real_escape_string($_POST['email']);
    $senha = $con->real_escape_string($_POST['senha']);


    //verificar login e senha
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    //executar o comando
    $sql_query = $con->query($sql_code) or die('Falha na execução SQL' . $con->error);

    //verificar a quantidade de registros | se for um

    //na seleção sql($sql_query) quantas linha retornaram
    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {

      //pega dados da consulta e armazena na variavel
      $usuario = $sql_query->fetch_assoc();

      //criar nova sessão
      //se nao existir
      if (!isset($_SESSION)) {
        session_start();
      }

      //criando 'user' da sessão e atribuindo os dados de $usuario id
      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      //Redirecionar user | 
      header("Location: index.php");
    } else {
      echo 'Falha ao logar';
    }
  }
}




?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="container">

  <form name="" method="POST" action="">
    <h1>Login</h1>
    <label for="login">User</label>
    <input type="email" name="email" size="40" maxlength="40"><br>

    <label for="senha">Password</label>
    <input type="password" name="senha" size="40" maxlength="40"><br>


    <input type="submit" id="entrar" name="entrar" value="Entrar">
    <br>
    <a href="cadNewUser.php">Criar nova conta</a>

  </form>


</div>




<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,700;0,800;0,900;1,400&display=swap');

  * {

    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;

  }

  form a {
    text-decoration: none;
    display: block;
    margin-top: 20px;
    font-weight: 600;
  }

  .container {
    max-width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: rgb(80, 93, 255);
    background: linear-gradient(98deg, rgba(80, 93, 255, 1) 24%, rgba(180, 12, 162, 1) 100%);
  }

  form {
    background: #ddd;
    width: 400px;
    height: auto;
    margin: auto;
    padding: 20px;
    border-radius: 10px;
    margin: 80px auto 50px auto;
  }

  form h1 {
    padding-bottom: 30px;
  }

  input[type='email'],
  input[type='password'] {
    background: #E8F0FE;
    margin: 5px 0;
    border: none;
    outline: none;
    padding: 8px;
    width: 100%;
    display: block;
    border-radius: 5px;
    font-size: 18px;


  }

  input[type='submit'] {
    background: #000;
    color: #fff;
    margin: 5px 0;
    border: none;
    cursor: pointer;
    outline: none;
    padding: 8px 25px;
    width: fit-content;
    border-radius: 5px;
  }

  input[type='submit']:hover {
    background: #fff;
    color: #000;
  }

  label {
    display: block;
    font-weight: 600;

  }
</style>