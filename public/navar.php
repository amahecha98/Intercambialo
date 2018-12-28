
<body>
        
                <nav class="navbar navbar-light bg-light">
                <a  class="logo" href="busquedacr.php"><img class="logo" src="../src/img/Logo.png" ></a>
                    <div>
                        
                        <form class="form-inline" method="POST" action="../src/class/validacion.php">
                            <input class="form-control mr-sm-2" type="text" placeholder="Usuario" name="user">
                            <input class="form-control mr-sm-2" type="password" placeholder="Contraseña" name="pass">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="insert">Ingresar</button>
                        </form>

                </nav>
        
        <div class="contenedor">
            <!-- Barra de Busqueda -->
            <div class="busqueda">
                <form class="form-inline">
                    <div class="input-group">
                        <div class="barrabusqueda">
                            <form method="POST" action="../class/view.php">
                            <input type="text" class="search" placeholder="Buscar" aria-label="Username"
                                aria-describedby="basic-addon1" name="busqueda">
                            <button class="boton" type="submit" name="insert"><img src="../src/img/IcoMoon-Free-master/SVG/135-search.svg"></button>
                            </form>


                            <!-- Busqueda por categoria -->
                            <select class="caja">
                                <option>Categoria</option>
                                <option>Tecnologia</option>
                                <option>Educación</option>
                                <option>Transporte</option>
                                <option>Hoteleria</option>
                                <option>Turismo</option>
                                <option>Mantenimiento</option>
                                <option>Aseo</option>
                                <option>Juridico</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
</div>
    
</body>
