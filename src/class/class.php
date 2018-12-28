<?php
class basededatos
{
        //defino mi constructor
    function __construct($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8)
    {
        $this->N1 = $n1;
        $this->N2 = $n2;
        $this->N3 = $n3;
        $this->N4 = $n4;
        $this->N5 = $n5;
        $this->N6 = $n6;
        $this->N7 = $n7;
        $this->N8 = $n8;
    }
        //creo mi medtodo para insertar
    function InsertUser()
    {   
            //defino mi consulta
        $sql = "INSERT INTO users (name, datacreate, datebirt, gender, estado, rol, email, city, emailsecond, photo) VALUES
                    ('$this->N1','$this->N2','$this->N3','$this->N4','$this->N5','$this->N6','$this->N7',0,'$this->N7', 'user.png')";
        return $sql;

    }
        //creo mi metodo para insertar
    function InsertLogin()
    {
        $sql = "INSERT INTO login (users, password, fkusers, createdate) VALUES ('$this->N1','$this->N2','$this->N3','$this->N4')";
        return $sql;
    }
        //creo mi metodo para poder validar el usuario
    function Validar()
    {
        require 'conexion.php';
        //verifico en la base de datos que el usuario y constraseña concuerden
        $sql = "SELECT login.users, users.name, users.email, login.password, login.fkusers, users.lastname, users.photo, users.profession, users.description, users.phone, users.emailsecond, city.city, departament.departament
                    FROM login,users,departament,city 
                    where  login.users='$this->N1' and login.password = '$this->N2' and login.fkusers = users.email and users.city=city.codcity and city.departament=departament.code ";

        $c = false;
        $search = $conn->prepare($sql);
        $search->execute(array());
        $rows = $search->fetchALL(PDO::FETCH_ASSOC);
                //$rows2 = $search2->fetchALL(PDO::FETCH_ASSOC);
                //verifica mi usuario y contraseña
        foreach ($rows as $row) {
            $c = true;
            $user = $row['users'];
            $name = $row['name'];
            $id = $row['email'];
            $password = $row['password'];
            $lastname = $row['lastname'];
            $profession = $row['profession'];
            $description = $row['description'];
            $phone = $row['phone'];
            $city = $row['city'];
            $photo = $row['photo'];
            $departament = $row['departament'];
            $email = $row['emailsecond'];


        }

        if ($c == true) {
            session_start();
            $_SESSION['r'] = true;
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $id;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['profession'] = $profession;
            $_SESSION['description'] = $description;
            $_SESSION['phone'] = $phone;
            $_SESSION['city'] = $city;
            $_SESSION['photo'] = $photo;
            $_SESSION['departament'] = $departament;
            $_SESSION['emailsecond'] = $email;
            $_SESSION['users'] = $user;
            $_SESSION['password'] = $password;
            header('location:../../public/busquedacr.php');

        } else {
            echo " <script> alerta ('Usuario y contraseña incorrecta') </script> ";
            header('location:../../public/index_intercambialo.php');
        }
    }
    function updateUsers()
    {
        require 'conexion.php';
        session_start();
        $sd = $_SESSION['email'];
        $user = $_SESSION['users'];
        $citys = $_SESSION['city'];
        try {
            $name = "UPDATE users SET name='$this->N1'  WHERE email='$sd' ";
            $email = "UPDATE users SET emailsecond='$this->N2' WHERE email='$sd'";
            $city = "UPDATE users SET city=$$this->N3 WHERE email='$sd'";
            $profession = "UPDATE users SET profession='$this->N4' WHERE email='$sd'";
            $phone = "UPDATE users SET phone='$this->N5' WHERE email='$sd'";
            $lastname = "UPDATE users SET lastname='$this->N6' WHERE email='$sd'";
            $description = "UPDATE users SET  description='$this->N7' WHERE email='$sd'";
            $pas = "UPDATE login SET  password='$this->N8' WHERE users='$user'";

            //valido todos los campos
            if ($this->N8 != "") {
                $update = $conn->prepare($pas);
                $update->execute();
                session_start();
                $_SESSION['password'] = $this->N8;
            } else {
                //creo mi siclo para que valide todo
                for ($i = 1; $i <= 7; $i++) {
                    if ($i == 1) {
                        $update = $conn->prepare($name);
                        $update->execute();
                    } else if ($i == 2) {
                        $update = $conn->prepare($email);
                        $update->execute();
                    } else if ($i == 3) {
                        if ($citys != "") {
                            $update = $conn->prepare($city);
                            $update->execute();
                        }
                    } else if ($i == 4) {
                        $update = $conn->prepare($profession);
                        $update->execute();
                    } else if ($i == 5) {
                        $update = $conn->prepare($phone);
                        $update->execute();
                    } else if ($i == 6) {
                        $update = $conn->prepare($lastname);
                        $update->execute();
                    } else if ($i == 7) {
                        $update = $conn->prepare($description);
                        $update->execute();
                    }
                }
            }
            require 'validarclass.php';
        

        } catch (PDOException $ex) {
            echo "Ocurrio un error";
            echo $ex->getMessage();
            exit;
        }
    }//valido que se aga el cambio de contraseña
    
}
?>