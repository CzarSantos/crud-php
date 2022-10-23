<?php
$host = 'localhost'; /*Local do banco */
$user = 'root'; /*Usuario */
$pass = ''; /*Senha */
$bd = 'bd_project'; /*Nome do banco */
$con = mysqli_connect($host, $user, $pass, $bd);/* varivel conexão */

/* echo "Banco Conectado!<br>"; */
if ($con->error) {
    die('Falha ao conectar ao banco' . $con->error);
}
