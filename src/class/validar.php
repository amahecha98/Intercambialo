<?php
 require 'conexion.php';

    $sql = "SELECT login.users, login.fkusers, users.emailsecond, users.email
     FROM login,users  where login.fkusers=users.email";
    
    //genero mi variable de sesion.
    $c = '';
    //mi consulta
    $search = $conn->prepare($sql);
    
    //guardo mi array
    $search->execute(array());
    
    $rows = $search->fetchALL(PDO::FETCH_ASSOC);
   
    //verifica mi usuario y contraseña
    foreach ($rows as $row) {
        $userv=$row['users'];
        $idv = $row['email'];
        $emailv=$row['emailsecond'];
       
    }
  
    ?>