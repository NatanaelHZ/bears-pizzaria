<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION['logado'] == false){
    echo "Acesso negado!";
    die();
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Pizzaria Byte - Back Office</title>
    <meta charset="utf-8">
    <meta name="description" content="Site da Pizzaria">
    <meta name="keywords" content="Pizza, Pedido online"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="../assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;600;700;800;900&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 

    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
    <header> 
      <img src="../assets/images/logo.png" id="img-logo" alt="Logo empresa um urso comendo pizza">
      <div id="menu_topo">
          <i class="fa fa-user" aria-hidden="true"></i>
            Usuário: <?=$_SESSION['usuario']; ?>
          &nbsp;&nbsp;
          <i class="fa fa-clock-o" aria-hidden="true"></i>
            Acesso em: <?=$_SESSION['inicio']; ?>
      </div>     
    </header>

    <nav>
      <ul>
          <li><a href="#">Início</a></li>
          <li><a href="adm_sabor.php">Sabores</a></li>
          <li><a href="adm_cliente.php">Clientes</a></li>
          <li><a href="#">Pedidos</a></li>
          <li><a href="sair.php">Sair</a></li>
        </ul>
    </nav>
