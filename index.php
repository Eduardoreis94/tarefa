<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php
  include_once("link.php");
  ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include_once("pages/menu.php");

  $link = $_GET["link"];

  $pag[1] = "pages/dashboard.php";
  $pag[2] = "pages/minhas_tarefa.php";
  $pag[3] = "pages/tarefas_adiada.php";
  $pag[4] = "pages/tarefas_finalizadas.php";

  $pag[00] = "sair.php";






  if (!empty($link)) {
    if (file_exists($pag[$link])) {
      include $pag[$link];
    } else {
      include "pages/dashboard.php";
    }
  } else {
    include "pages/dashboard.php";
  }
  ?>


  </div>


  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
 
  </footer>

  


</body>
</html>
