 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Novo User</title>
 </head>

 <body>

   <div class="container">
     <form name="" method="POST" action="">
       <h1>Novo User</h1>
       <label for="nome">Nome</label>
       <input type="text" name="nome" size="140" maxlength="40"><br>

       <label for="email">E-mail</label>
       <input type="email" name="email" size="140" maxlength="40"><br>

       <label for="senha">Senha</label>
       <input type="password" name="senha" size="35" maxlength="15"><br>

       <input type="submit" name="cadastrar" value="cadastrar">


     </form>

   </div>
   <?php



    if (!empty($_REQUEST['email']) and !empty($_REQUEST['senha'])) {
      $nome = $_REQUEST['nome'];
      $email = $_REQUEST['email'];
      $senha = $_REQUEST['senha'];


      include('conectar.php');
      $sql = "INSERT INTO usuarios (nome,email,senha) VALUES('$nome','$email','$senha')";
      $result = mysqli_query($con, $sql) or die('Error no script SQL');
      echo "<script>alert('Dados gravados com sucesso')</script>";
      header('Location: login.php');
      mysqli_close($con);/* Fecha conexão */
    } else {
    }


    /*   $result = $con->query($sql) or die('Error no script SQL');
 */
    ?>

 </body>


 <style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,700;0,800;0,900;1,400&display=swap');

   * {

     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Montserrat', sans-serif;

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
   input[type='text'],
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

 </html>