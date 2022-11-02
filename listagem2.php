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
        display: flex;
        justify-content: center;
    }

    .container {
        width: 800px;
        display: flex;
        padding: 80px 10px;
        overflow-x: auto;

    }

    table {
        width: 100%;


    }

    th,
    td,
    tr {
        padding: 10px;
        background: #0F0F0F;
        color: #fff;
        border-radius: 3px;


    }
</style>

<body>
    <header>
        <div class="btn-open"><i class="fa-solid fa-ellipsis-vertical"></i></div>
        <div class="btn-close"><i id='close' class="fa-solid fa-xmark"></i></div>

        <h1>List user |</h1>

    </header>

    <nav class="menu">

        <div class="img">
            <img src="https://img.freepik.com/vetores-premium/perfil-de-avatar-de-homem-no-icone-redondo_24640-14044.jpg" alt="">
        </div>
        <span class="in">Olá! <?php echo $_SESSION['nome']; ?></span>

        <ul>

            <li><a href="index.php">Home</a> </li>
            <li><a href="inserir.php">Cadastrar</a> </li>
            <li><a class="ativoli" href="listagem2.php">Listar</a> </li>
            <li><a href="alterar.php">Alterar</a> </li>
            <li><a href="excluir.php">Excluir</a> </li>
        </ul>

        <span class="out"><a href="logout.php">Sair</a></span>
    </nav>

    <div class="container">
        <table border=0>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>




            <?php
            include('conectar.php');
            $sql = "SELECT * from registros";
            $result = mysqli_query($con, $sql);/* executando banco */
            $totalreg = mysqli_num_rows(($result));


            while ($reg = mysqli_fetch_array($result))/* Carregando registros do banco */ {
                echo "<tr><td> "    . $reg['codigo'] .      "</td>";
                echo "<td> "        . $reg['nome'] .        "</td>";
                echo "<td> "        . $reg['endereco'] .    "</td>";
                echo "<td> "        . $reg['fone'] .        "</td>";
                echo "<td> "       . $reg['email'] .       "</td></tr>";
            }


            echo "</table> </div>";
            mysqli_close($con);
            echo "<br><div class='font'>Total de Users cadastrados: " . $totalreg;
            ?>
</body>

</html>

<script src="app.js"></script>
<script src="https://kit.fontawesome.com/2b0612ebbf.js" crossorigin="anonymous"></script>