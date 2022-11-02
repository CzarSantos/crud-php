<?php
include('protect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,700;0,800;0,900;1,400&display=swap');

    @import "menu.css";

    * {

        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body {
        background: #1B1D20;
        /* background: rgb(80, 93, 255);
        background: linear-gradient(98deg, rgba(80, 93, 255, 1) 24%, rgba(180, 12, 162, 1) 100%); */
    }

    form {
        max-width: 600px;
        height: auto;
        background: #fff;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        margin: 10px auto;
    }

    #sc {
        margin: 80px auto 0px auto;
    }

    input[type='text'] {
        background: #E8F0FE;
        margin: 5px 0;
        border: none;
        outline: none;
        padding: 8px;
        display: block;
        border-radius: 5px;
    }

    input[type='submit'] {
        background: #000;
        color: #fff;
        margin: 5px 0;
        border: none;
        cursor: pointer;
        outline: none;
        padding: 8px 15px;
        width: fit-content;
        border-radius: 5px;
    }

    input[type='submit']:hover {
        background: #ddd;
        color: #000;
    }

    label {
        background: #fff;
        display: block;
        font-weight: 600;

    }
</style>

<body>
    <header>

        <div class="btn-open"><i class="fa-solid fa-ellipsis-vertical"></i></div>
        <div class="btn-close"><i id='close' class="fa-solid fa-xmark"></i></div>

        <h1>Alter user</h1>

    </header>

    <nav class="menu">

        <div class="img">
            <img src="https://img.freepik.com/vetores-premium/perfil-de-avatar-de-homem-no-icone-redondo_24640-14044.jpg" alt="">
        </div>
        <span class="in">Olá! <?php echo $_SESSION['nome']; ?></span>

        <ul>

            <li><a href="index.php">Home</a> </li>
            <li><a href="inserir.php">Cadastrar</a> </li>
            <li><a href="listagem2.php">Listar</a> </li>
            <li><a class="ativoli" href="alterar.php">Alterar</a> </li>
            <li><a href="excluir.php">Excluir</a> </li>
        </ul>

        <span class="out"><a href="logout.php">Sair</a></span>
    </nav>


    <form id="sc" name="dados" method="post" action="">
        <label for="txtcodigo">Código</label>
        <input type="text" name="txtcodigo" size="5">
        <input type="submit" name="btnpesquisar" value="Pesquisar">
        <input type="submit" name="btnlistar" value="Listar">
    </form>

    <?php

    /* Consulta */
    include("conectar.php");/* instanciando conexão */
    if (isset($_POST['btnpesquisar'])) {
        $codigo = $_POST['txtcodigo'];
        $sql = "select * from registros where codigo = '$codigo'";
        $result = mysqli_query($con, $sql);
        while ($reg = mysqli_fetch_array($result))/* carregando informações dentro de $reg */ {
            echo "<form method='post'>";/* Abrindo formulario dentro do PHP usar ECHO*/
            echo "Código <input type='text' value='$reg[codigo]'
            name='txtcodigo' maxlength='5' readonly><br>";/* variavel de gravação */
            echo "Nome<input type='text' value='$reg[nome]'
            name='txtnome' maxlength='40''><br>";
            echo "Endereço <input type='text' value='$reg[endereco]'
            name='txtendereco' maxlength='40' '><br>";
            echo "Telefone <input type='text' value='$reg[fone]'
            name='txtfone' maxlength='15' ><br>";
            echo "E-mail <input type='text' value='$reg[email]'
            name='txtemail' maxlength='50' ><br>";
            echo "<input type='submit' name='btnalterar' value='Alterar'
            >";
            echo "</form><br>";
        }
    }

    /* Alteração */
    if (isset($_POST['btnalterar']))/* Verifica se clicou */ {
        $codigo = $_POST['txtcodigo'];/* Inserindo o texto do campo txtcodigo dentro da variavel local(memoria - trabalho)*/
        $nome = $_POST['txtnome'];
        $endereco = $_POST['txtfone'];
        $fone = $_POST['txtfone'];
        $email =  $_POST['txtemail'];

        $sql = "update registros set codigo='$codigo', nome='$nome',
         endereco='$endereco',fone='$fone',email='$email' where codigo='$codigo'";
        $result = mysqli_query($con, $sql);/* executando conexão */
        echo "<br><font size=4 color='green' background-color:'white' face='verdana'>Atualização dos dados com sucesso</font></br>";
    }

    mysqli_close($con);
    if (isset($_POST['btnlistar'])) {
        header('Location: listagem2.php');
    }


    ?>
</body>

</html>

<script src="app.js"></script>
<script src="https://kit.fontawesome.com/2b0612ebbf.js" crossorigin="anonymous"></script>