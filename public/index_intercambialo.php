<?php 
session_start();
if($_SESSION['r']==true){
    header ('Location:busquedacr.php');
}

?>

<!DOCTYPE html>
<html>




<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Intercambialo</title>
    <link rel="shortcut icon" href="../src/img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/boostrap/btp/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/doskect.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/perfil.css">

</head>

<body>
    <div >
             <?php
             require 'navar.php';
             ?>
    </div>
    <div class="contenedor">
        <!--Imagen y Login -->
            <!-- Mision y vision -->

            <div class="row">
                <div class="col-sm-12 col-xl-4">
                    <div class="card">
                        <div class="card-body" id="mensajes">
                            <h5 class="card-title text-center">Mision</h5>
                            <p class="card-text">Intercambialo es una plataforma de intercambio de servicio, basado en
                                la
                                modalidad de red social.
                                Su fin es de dar una nueva alternativa de trueque entre las personas, conectandolas
                                según
                                sus
                                necesidades.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4">
                    <div class="card">
                        <div class="card-body" id="mensajes">
                            <h5 class="card-title text-center">Vision</h5>
                            <p class="card-text">Intercambialo para el año 2020 será una de las platafomas mas
                                conocidas a
                                nivel nacional, sus
                                servicios cubriran todo
                                el territorio nacional y los usuario activos superaran los 1000 por hora.</p>
                        </div>
                    </div>
                </div>

                <!-- Registrarse -->

                <div class="col-sm-12 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Registro</h5>
                            <form method="POST" action="../src/class/insert.php" name="registro">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Nombre" required name="name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Usuario" required name="user">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Contraseña" required name="pass">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Repite la contraseña"
                                        required  name="pass1" >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="date" placeholder="Fecha de nacimiento" required name="date">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Correo Electronico" required name="email">
                                </div>

                                <!-- Genero-->

                                <div class="form-check-inline">
                                    <div class="chekbox">
                                        <input class="form-check-input" type="radio" name="genero" id="exampleRadios1"
                                            value="1" checked >
                                        <label class="form-check-label" for="exampleRadios1">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="chekbox">
                                        <input class="form-check-input" type="radio" name="genero" id="exampleRadios2"
                                            value="2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Femenino
                                        </label>
                                    </div>
                                </div>
                                <div class="condi">
                                    <input type="checkbox" id="box2" value="1" name="ok"   ><label for="box2" >Aceptas los
                                    </label>
                                    <!-- link para el modal -->
                                    <a data-toggle="modal" data-target="#Terminos" href="footer.php">Terminos y condiciones</a>
                                </div>
                            </form>
                                <div class="update">
                                    <button  class="btn btn-primary" onclick="validar();" >Registrar</button>
                                </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        
        <footer>
            <div>
                <?php
                require 'footer.php';
                ?>
            </div>
        </footer>

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
<script src="../src/js/validacion.js"></script>
<script>
</html>