<?php
//llamo el alchivo donde se configuro la base de datos
require_once 'dbconfig.php';

$dsn="pgsql:host=$host;
port=$port;
dbname=$db;
user=$username;
password=$pass";

try{
    //Creo la conexion a PostgreSQL
    $conn=new PDO($dsn);

    //muestra un mensaje si se conecta bien
    if($conn){
        //echo 'Conectado a la base de datos con éxito';
    }
}catch (PDOException $e){
    echo $e->getMessage();
}
?> 