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

  .container {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 20px;
    padding: 50px 20px;
    background: rgb(80, 93, 255);
    background: linear-gradient(98deg, rgba(80, 93, 255, 1) 24%, rgba(180, 12, 162, 1) 100%);
    position: relative;
  }

  .box {
    width: 200px;
    height: 200px;
    background: #000;
    border-radius: 5px;
    transition: .3s;
  }

  .box:hover {
    transform: scale(1.1);
    transition: .3s;
  }

  .box a {
    text-decoration: none;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 10px;
  }

  .box a h1 {
    font-style: none;
    font-size: 22px;
    font-weight: 500;
  }

  .box i {
    font-size: 3rem;
    margin-bottom: 10px;
  }
</style>

<body>



  <div class="container">
    <header>
      <div class="btn-open"><i class="fa-solid fa-ellipsis-vertical"></i></div>
      <div class="btn-close"><i id='close' class="fa-solid fa-xmark"></i></div>

      <h1>Dashboard | </h1>

    </header>

    <nav class="menu">

      <div class="img">
        <img src="https://img.freepik.com/vetores-premium/perfil-de-avatar-de-homem-no-icone-redondo_24640-14044.jpg" alt="">
      </div>
      <span class="in">Olá! <?php echo $_SESSION['nome']; ?></span>

      <ul>

        <li><a class="ativoli" href="index.php">Home</a> </li>
        <li><a href="inserir.php">Cadastrar</a> </li>
        <li><a href="listagem2.php">Listar</a> </li>
        <li><a href="alterar.php">Alterar</a> </li>
        <li><a href="excluir.php">Excluir</a> </li>
        <li></li>
      </ul>

      <span class="out"><a href="logout.php">Sair</a></span>
    </nav>


    <div class="box">
      <a href="inserir.php">
        <i class="fa-solid fa-id-card"></i>
        <h2>Cadastrar</h2>
      </a>
    </div>
    <div class="box">
      <a href="listagem2.php">
        <i class="fa-solid fa-magnifying-glass"></i>
        <h2>Consultar</h2>
      </a>

    </div>
    <div class="box">
      <a href="alterar.php">
        <i class="fa-solid fa-file-invoice"></i>
        <h2>Alterar</h2>
      </a>
    </div>
    <div class="box">
      <a href="">
        <i class="fa-solid fa-trash"></i>
        <h2>Excluir</h2>
      </a>
    </div>
  </div>

  <script src="app.js"></script>
  <script src="https://kit.fontawesome.com/2b0612ebbf.js" crossorigin="anonymous"></script>
</body>

</html>