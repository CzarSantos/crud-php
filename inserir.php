<?php

include('protect.php');


?>


<h1>Cadastro</h1>
</font>
<font size=5></font>

<div class="box-home">
    <a href="index.php">Home</a>
</div>

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


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,700;0,800;0,900;1,400&display=swap');

    * {

        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        background: rgb(80, 93, 255);
        background: linear-gradient(98deg, rgba(80, 93, 255, 1) 24%, rgba(180, 12, 162, 1) 100%);
    }

    h1 {
        color: white;
        font-weight: 800;
        background: #0F0F0F;
        padding: 10px;
        text-align: center;

        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
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


    .box-home {
        position: fixed;
        width: 100px;
        height: 100px;
        left: 10px;
        top: 100px;
        border-radius: 50px;
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box-home a {
        padding: 10px;
        text-decoration: none;
        outline: none;
        display: block;
        color: #fff;
        background: #000;
    }

    .box-home a:hover {
        border-radius: 5px;
        color: rgb(80, 93, 255);
    }
</style>