

<!DOCTYPE html>
<html lang="pt-br">
<?php include "../../header.php";
require_once('../../../../db.php');
?>
</header>
<body>
<?php include "../../menu.php"; ?>
<main id="main" class="main">
<div class="pagetitle">
      <h1>Geo Loc</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                   <li class="breadcrumb-item active">Loteamento</li>
                  
      </nav>


      <?php

/*

 
// Inicia a sessão
// Verifica se o usuário está logado
if (isset($_SESSION['NivelDeAcesso'])) {
    // Verifica o nível de acesso do usuário
    if ($_SESSION['NivelDeAcesso'] == 'Admin') {
        // Código para administradores
        echo "Bem-vindo, administrador!";
        include 'IndexView.php';
    } elseif ($_SESSION['NivelDeAcesso'] == 'DivFlor') {
        // Código para moderadores
        echo "Bem-vindo! Acesso";
        include 'IndexView.php';
    } else {
        // Código para usuários comuns
        echo "Sem nível de acesso!";
    }
} else {
    echo "Sem nível de acesso!";
    // Redireciona o usuário para a página de login
    header('Location: index.php');
    exit();
}

*/
include 'IndexView.php';
?>


