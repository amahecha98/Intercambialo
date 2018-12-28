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
  <link rel="stylesheet" type="text/css" media="screen" href="../src/css/styles.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../src/css/perfil.css">
  
 
</head>

<body>

  <body>
    <div>
      <!--Navar -->

      <div>
        
        <?php
        session_start();
            if($_SESSION['r']==true){
              require "nav.php";
            }else{
              require "navar.php";
            }
        ?>

      </div>

      <div class="contenedor">

        <div>
          <?php
          require 'publicaciones.php';
          ?>
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

</html>