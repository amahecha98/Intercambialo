<?php
//abro la session
session_start();
$nombre=md5($_SESSION['email']);
$sd= $_SESSION['email'];


//cambio el nomre de la imagen a aguardar
$target_dir = "../img/users/";
$archivo = $_FILES['fileToUpload']['name'];
$tipo = stristr($archivo,'.');
$nombre = $nombre.$tipo;
$nombre = strtolower($nombre);
$nombre = rtrim($nombre);

//guardo la imagen con el nuevo nombre
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]=$nombre);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//echo $target_file;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "El nombre del archibo es ";
        $uploadOk = 1;
    } else {
        //echo "El archivo no es una foto";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "La imagen ya existe.";
    if(unlink($target_file)){
        echo "imagen remplazada";
    }
    
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Es demasiado pesada la foto";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo " Solo se puede archivos JPG, JPEG, PNG & GIF .";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Uups, no se pudo subir la foto .";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "la imagen se ". basename( $_FILES["fileToUpload"]["name"]). " se a actualizado.";
        echo 'Oprimir el boton actualizar';
        require 'conexion.php';
        // atualizo la foto
        $photo="UPDATE users SET photo='$nombre'  WHERE email='$sd' ";
        $update = $conn->prepare($photo);
        $update->execute();

       ?>
       <script>
           $('#foto').click(function{$('#foto').modal('hide');});
       </script>
       <?php
    

    } else {
        echo "Uups. error .";
      
    }
} 
?>