<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intercambialo</title>
    <link rel="shortcut icon" href="../src/img/logo.png">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/boostrap/btp/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/doskect.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/photo.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../src/css/perfil.css">

</head>
<body>
<body>
        <!--validacion de secion-->
        <div>
            <?php
                 session_start();
                 if($_SESSION['r']==true){
                    $result='../src/img/users/'.$_SESSION['photo'];
                   require "nav.php";
                 }else if($_SESSION['r']==false){
                     header ('Location:busquedacr.php');
                 }
            ?>
        </div>
    <div class="input">
        <!--Imagen y Login -->

            <div class="perfil">


                <!-- imagen perfil e info logros -->
                <div class="imgeinfoperfil">
                <div class="photo"><img class="photo" src="<?php echo $result?>";></div>
                
                <!--cambiar foto-->
                <div class="infolo"><a data-toggle="modal" data-target="#foto"href="">Cambiar foto</a></div>
                <div class="infolo"><a data-toggle="modal" data-target="#logros"href="">Información de logros</a></div>
                </div>

                <!--
                Datos del usuario -->
                <form method="POST" action="../src/class/update.php" name="updat">
                     <div class="row">
                        <div class="col">
                            <label>Nombre:</label>
                            <textarea type="text" class="form-control" name="name" rows="1"><?php echo $_SESSION['name']?></textarea>
                            <label>Telefono:</label>
                            <textarea type="text" class="form-control" name="phone" rows="1"><?php echo $_SESSION['phone']?></textarea>
                            <label>Codigo postal de la Ciudad:</label>
                            <input type="text" class="form-control" placeholder="<?php echo $_SESSION['city']?>" name="city" rows="1">
                            <label>Profesión u oficio:</label>
                            <textarea type="text" class="form-control" name="profession" rows="1"><?php echo $_SESSION['profession']?></textarea>
                            
                        </div>
                        <div class="col">
                            <label>Apellidos:</label>
                            <textarea type="text" class="form-control" name="lastname" rows="1"><?php echo $_SESSION['lastname']?></textarea>
                            <label>Departamento:</label>
                            <input type="text" class="form-control" placeholder="<?php echo $_SESSION['departament']?>" name="departament" rows="1">
                            <label>Idioma:</label>
                            <input type="text" class="form-control" name="idioma" placeholder="Español">
                            <label>E-mail:</label>
                            <textarea type="text" class="form-control" name="email" rows="1"><?php echo $_SESSION['emailsecond']?></textarea>
                            
                        </div>

                    </div>

                    <div>
                    <label for="exampleFormControlTextarea1">Descripción personal:</label>
                    <textarea class="form-control" name="description" rows="3"><?php echo $_SESSION['description']?></textarea >
                    <!--cambiar Contraseño-->
                    <div class="infolo"><a data-toggle="modal" data-target="#contraseña"href="">Cambiar contraseña</a></div>
                    </div>

                </form>

                    <!--Model info logros-->
                    <div class="modal fade" id="logros" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="terminos">Información de logros</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <iframe width="760" height="500"  src="politicas.php" scrolling="si" frameborder="no" ></iframe>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--Model info logros-->
                    <div class="modal fade" id="contraseña" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contraseña">Cambiar contraseña</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <iframe width="100%" height="100%"  src="password.php" scrolling="si" frameborder="no" ></iframe>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <!--Model cambiar foto -->
                    <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="foto">Cambiar foto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <iframe width="100%" height="100%"  src="foto.php" scrolling="si" frameborder="no" ></iframe>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- boton atualizar-->
                <div class="update">
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="actualizar();">Actualizar</button>
                </div>
            </div>  
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
 <script src="../src/js/update.js"></script>

</html>