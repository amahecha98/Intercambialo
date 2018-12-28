<?php
    require 'class.php';
    
    /*session_start();
    echo $pass = $_SESSION['password'];
    echo $user = $_SESSION['users'];*/
    $up_name = $_POST['name'];
    $up_email = $_POST['email'];
    $up_city = $_POST['city'];
    $up_profession = $_POST['profession'];
    $up_phone = $_POST['phone'];
    $up_lastname = $_POST['lastname'];
    $up_description = $_POST['description'];
    $up_pas = $_POST['pass'];

    $update = new basededatos($up_name,$up_email,$up_city,$up_profession,$up_phone,$up_lastname,$up_description,$up_pas);
    $update->updateUsers();
    require 'validarclass.php';

?>