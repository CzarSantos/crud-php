<?php

//Restaura se existir
if (!isset($_SESSION)) {
  session_start();
}

//destruir se não exisitr seção
session_destroy();

header('Location: index.php');
