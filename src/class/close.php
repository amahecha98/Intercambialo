<?php 
    session_start();
    $_SESSION['r']=false;
    session_destroy();
    header('location:../../public/index_intercambialo.php');
?>