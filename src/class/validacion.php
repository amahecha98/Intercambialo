<?php
    require 'class.php';
    if (isset($_POST['insert'])) 
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $validar = new basededatos($user,$pass,null,null,null,null,null,null);
        $validar->Validar();
    }
?>