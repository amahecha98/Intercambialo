<link rel="stylesheet" type="text/css" media="screen" href="../src/boostrap/btp/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../src/css/perfil.css">

<form method="POST" action="../src/class/update.php" name="updata">
    <div class="form-group">
        <input class="form-control" type="password" placeholder="Contraseña" required name="pass">
    </div>
    <div class="form-group">
    <input class="form-control" type="password" placeholder="Repite la contraseña"
        required  name="pass1" >
    </div>
</form>

<div class="update">
<button class="btn btn-primary" onclick="valida();" >Registrar</button>
</div>
<script src="../src/js/validar.js"></script>