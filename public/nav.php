<body>
        
                <nav class="navbar navbar-light bg-light">
                    <a  class="logo" href="busquedacr.php"><img class="logo" src="../src/img/Logo.png" ></a>
                    <div>
                        <?php
                        
                        echo'
                        <div>
                            <a href="perfil.php">'.$_SESSION['name'].'</a>
                            <a class="btn btn-primary" href="../src/class/close.php" role="button">Salir</a>
       
                        </div>';
                        ?>

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
                            <button class="boton" type="submit" name="insert"><img src="../img/IcoMoon-Free-master/SVG/135-search.svg"></button>
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
                    <?php
            echo'
            <button type="button" class="btn btn-outline-primary"><a href="">Mis servicios</a></button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            ';
            ?>
                </form>
            </div>
            
</div>
    
</body>