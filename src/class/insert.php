<?php   
    require 'conexion.php';
    require 'date.php';
    require 'validar.php';
    require 'class.php';

    try{
        //Resivos los datos por el metodo POST despuees que los campos se validan
        $name = $_POST['name'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $date = date('m-d-Y',strtotime($_POST['date']));
        $gender = $_POST['genero'];
        $email = $_POST['email'];
        $state = 1;
        $rol = "usuarioregistrado";

        //valido que el ususario no este registrado o ya este en el sistema
        if($user == $userv || $email == $emailv || $emial == $idv)
            {
                echo "<SCRIPT type='text/javascript'>
                    alert('Usuario ya esta en uso');
                    window.location.replace(\"../../public/index_intercambialo.php\");
                    </SCRIPT>";
            }
        else
            {
                // Registro a mi usuario con el objeto insert y insert2
                $sql = new basededatos($name,$dateday,$date,$gender,$state,$rol,$email, null);
                $insert = $conn->exec($sql->InsertUser());

                $sql = new basededatos($user,$pass,$email,$dateday,null,null,null,null);
                $insert2 = $conn->exec($sql->InsertLogin());

                echo "<SCRIPT type='text/javascript'>
                        window.location.replace(\"../../public/index_intercambialo.php\"); alert('Usuario Registrado');
                        </SCRIPT>";
            }
    }catch (PDOException $ex)
    {
        echo "Ups, Ocurrio un error";
        echo $ex->getMessage();
        exit; 
    }
 ?>