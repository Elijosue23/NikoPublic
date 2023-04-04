
    <header class="app-header">
            <a class="app-header__logo" href="#">
                <img src="../App/img/logo.png" style="width: 230px;height: 50px">
                </img>
            </a>
            <!-- Sidebar toggle button-->
            <!-- Navbar Right Menu-->
            <ul class="app-nav" style="background:#c6cacb">
                <li class="app-search">
                    <a class="dropdown-item" href="#">
                        <em class="fa fa-user fa-lg">
                        </em>
                        <?php echo $_SESSION['S_LASTNOMBRE'] ?>
                    </a>
                </li>
                <li class="app-search">
                    <a class="dropdown-item" href="#" onclick="OpenModalChangePaswoerd()">
                        <em class="fa fa-sharp fa-solid fa-key fa-lg">
                        </em>
                        Clave
                    </a>
                </li>
                <!--Notification Menu-->
                <li class="app-search">
                    <a class="dropdown-item" href="../Controller/LoginController/Destroy_sessionController.php">
                        <em class="fa fa-sign-out fa-lg">
                        </em>
                        Salir
                    </a>
                </li>
                <!-- User Menu-->
                <li class="app-search">
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-grip-lines-vertical">
                        </i>
                        <?php date_default_timezone_set('America/Los_Angeles'); echo date("h:i A"); ?>
                    </a>
                </li>
            </ul>
        </header>


        <div class="modal fade" id="modalChangePasswoed"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloModal">Cambios de clave</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="fromPasswoed" autocomplete="off" onsubmit="return false" >
                        <div class="bs-component" id="contr_aviso_login" style=" display: none">
                            <div class="alert alert-dismissible alert-danger">
                                <a class="" id="mensajeLogin"></a>
                            </div>
                        </div>

                        <div class="bs-component"  id="susscerAlert" style="display: none">
              <div class="alert alert-dismissible alert-success">
                <button class="close" type="button" data-dismiss="alert">×</button><strong id="mensajedeexito"></strong> 
              </div>
            </div>
                      
                        <br>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Clave Actual</label>
                            <div class="col-md-8">
                                <input class="form-control" id="txt_passActual"  placeholder="Ingrese Clave Actual" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Clave Nueva</label>
                            <div class="col-md-8">
                                <input class="form-control"  id="text_passNew" placeholder="Clave nueva" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Repita la Clave</label>
                            <div class="col-md-8">
                                <input class="form-control"  id="text_twopass" placeholder="Repita la clave nueva" autocomplete="off">
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;Cerrar</button>
                            <button class="btn btn-primary btn-sm" onclick="Change_password()"><i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;Actualizar</button>
                        </div>
                        <div class="tile-footer">
                 
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

