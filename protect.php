<?php

if (!isset($_SESSION)) {
  session_start();
}

//verificar 
if (!isset($_SESSION['id'])) {
  die("Você não pode acessar esta página. <a href=\"login.php\">Entrar</a>");
}
