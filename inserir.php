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

<body>
    <header>
        <div class="btn-open"><i class="fa-solid fa-ellipsis-vertical"></i></div>
        <div class="btn-close"><i id='close' class="fa-solid fa-xmark"></i></div>

        <h1>Cad User |</h1>

    </header>

    <nav class="menu">

        <div class="img">
            <img src="https://img.freepik.com/vetores-premium/perfil-de-avatar-de-homem-no-icone-redondo_24640-14044.jpg" alt="">
        </div>
        <span class="in">Olá! <?php echo $_SESSION['nome']; ?></span>

        <ul>

            <li><a href="index.php">Home</a> </li>
            <li><a class="ativoli" href="inserir.php">Cadastrar</a> </li>
            <li><a href="listagem2.php">Listar</a> </li>
            <li><a href="alterar.php">Alterar</a> </li>
            <li><a href="excluir.php">Excluir</a> </li>
        </ul>

        <span class="out"><a href="logout.php">Sair</a></span>
    </nav>


    <form name=" " method="post" action="">
        <label for="txtnome">Nome</label>
        <input type="text" name="txtnome" size="40" maxlength="40"><br>

        <label for="txtendereco">Endereço</label>
        <input type="text" name="txtendereco" size="40" maxlength="40"><br>

        <label for="txtfone">Telefone</label>
        <input type="text" name="txtfone" size="15" maxlength="15"><br>

        <label for="txtemail">Email</label>
        <input type="text" name="txtemail" size="50" maxlength="50"><br>
        <input type="submit" name="btngravar" value="Gravar">
        <input type="submit" name="btnlistar" value="Listar">
    </form>


    <?php
    if (!empty($_REQUEST['txtnome'])) {
        $nome = $_REQUEST['txtnome'];
        $endereco = $_REQUEST['txtendereco'];
        $fone = $_REQUEST['txtfone'];
        $email = $_REQUEST['txtemail'];
        include("conectar.php"); //conectar banco
        $sql = "insert into registros (nome,endereco,fone,email) values('$nome','$endereco','$fone','$email')";
        $result = mysqli_query($con, $sql);
        echo "<script>alert('Dados gravados com sucesso')</script>";
        mysqli_close($con);/* Fecha conexão */
    }
    if (isset($_POST['btnlistar']))/* Verifica se clicou */ {
        header('Location:listagem2.php');/* chamando outra aba */
    }
    ?>

</body>

</html>

<script src="app.js"></script>
<script src="https://kit.fontawesome.com/2b0612ebbf.js" crossorigin="anonymous"></script>


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
        background: rgb(80, 93, 255);
        background: linear-gradient(98deg, rgba(80, 93, 255, 1) 24%, rgba(180, 12, 162, 1) 100%);
    }


    form {
        max-width: 600px;
        height: auto;
        background: #fff;
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        margin: 80px auto 50px auto;
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