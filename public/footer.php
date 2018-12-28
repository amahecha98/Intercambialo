<footer>
            <div class= footer>
                <div class="links"><a data-toggle="modal" data-target="#Politicas"href="">Politicas de Privacidad</a></div>
                <div class="links"><a data-toggle="modal" data-target="#Terminos"href="">Terminos y Condiciones</a></div>
                <div class="links"><a data-toggle="modal" data-target="#Quienessomos"href="">Quines Somos</a></div>
            <!--Model politicas-->
            <div class="modal fade" id="Politicas" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="terminos">Terminos y Coniciones</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><?php require 'politicas.php';?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Model Quienes somos-->
            <div class="modal fade" id="Quienessomos" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="terminos">Quines Somos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p> <?php require 'quienes.php'; ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--Modal Terminos y Condiciones -->
            <div class="modal fade" id="Terminos" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="terminos">Terminos y Coniciones</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                    <?php
                                    require 'terminos.php';
                                    ?>

                                    </p>
                                </div>

                            </div>
                        </div>
            </div>
        </footer>