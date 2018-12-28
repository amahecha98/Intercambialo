<?php
 require 'conexion.php';
    
 session_start();
 $user=$_SESSION['users'];
 $pass=$_SESSION['password'];
 

 $sql = "SELECT login.users, users.name, users.email, login.password, login.fkusers, users.lastname, users.photo, users.profession, users.description, users.phone, users.emailsecond, city.city, departament.departament
 FROM login,users,departament,city 
 where  login.users='$user' and login.password = '$pass' and login.fkusers = users.email and users.city=city.codcity and city.departament=departament.code ";
 //$sql1 = "SELECT users.city, departament.name as departamento FROM users,city,departament where where  login.users='$user' and login.password = '$pass' and login.fkusers = users.email and city.departament = departament.name ";
 //genero mi variable de sesion.
 $c = '';
 //mi consulta
 $search = $conn->prepare($sql);
 //$search2 = $conn->prepare($sql1);
 //guardo mi array
 $search->execute(array());
 //$search2->execute(array());
 $rows = $search->fetchALL(PDO::FETCH_ASSOC);
 foreach ($rows as $row) {
 $c = true;
 $user=$row['users'];
 $name = $row['name'];
 $id = $row['email'];
 $password=$row['password'];
 $lastname=$row['lastname'];
 $profession=$row['profession'];
 $description=$row['description'];
 $phone=$row['phone'];
 $city=$row['city'];
 $photo=$row['photo'];
 $departament=$row['departament'];
 $email=$row['emailsecond'];

 }
 
 if ($c == true) {
     session_start();
     $_SESSION['r']=true;
     $_SESSION['name']=$name;
     $_SESSION['email']=$id;
     $_SESSION['lastname']=$lastname;
     $_SESSION['profession']=$profession;
     $_SESSION['description']=$description;
     $_SESSION['phone']=$phone;
     $_SESSION['city']=$city;
     $_SESSION['photo']=$photo;
     $_SESSION['departament']=$departament;
     $_SESSION['emailsecond']=$email;
     $_SESSION['users']=$user;
     
     header('location:../../public/perfil.php');
     
 }
/*
    class validar
{
    function __construct($var1, $var2)
    {
        $this->Var1 = $var1;
        $this->Var2 = $var2;
    }
    function sessiones()
    {
        
        $sql = "SELECT login.users, users.name, users.email, login.password, login.fkusers, users.lastname, users.photo, users.profession, users.description, users.phone, users.emailsecond, city.city, departament.departament
        FROM login,users,departament,city 
        where  login.users='$this->var1' and login.password = '$this->var2' and login.fkusers = users.email and users.city=city.codcity and city.departament=departament.code ";
  
        $c = false;
        require 'conexion.php';
        $search = $conn->prepare($sql);
    
        $search->execute(array());
   
        $rows = $search->fetchALL(PDO::FETCH_ASSOC);
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
            header('location:../../public/perfil.php');

        }
    }
}
*/

?>