<!-- Adicionando as sessions -->
<?php
    require '../../source/model/Config.php';
    require '../../source/model/Model.php';
    // Session start
    session_start();
    if(!isset($_SESSION['email']) AND !isset($_SESSION['senha'])):
      header('location: ../index.php');
      exit();
    endif;

    if(isset($_GET['logout']) && $_GET['logout'] == 'true'):
      session_destroy();
      header("location: ../index.php");
    endif;
?>
<!-- Adicionando as sessions -->