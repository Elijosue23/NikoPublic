<?php
session_start();
if(isset($_SESSION['S_IDUSUARIO'])){
  header('Location: ../home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <!-- Main CSS-->
                    <link href="../../App/css/main.css" rel="stylesheet" type="text/css">
                        <link href="../../App/css/login.css" rel="stylesheet" type="text/css">
                            <!-- Font-icon css-->
                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                                <title>
                                    Login
                                </title>
                            </link>
                        </link>
                    </link>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <section class="material-half-bg">
            <div class="cover" style="background: #dcdbdb">
                <img src="../../App/img/logo.png" style="width: 250px;height: 7vh">
                </img>
            </div>
        </section>
        <section class="login-content positionImagen">
            <div class="login-box clasepotitionLOgo">
                <form autocomplete="false" class="login-form" onsubmit="return false">
                    <h5 class="">
                        Entrada al SGA
                    </h5>
                    <div class="bs-component" id="contr_aviso_login" style="display: none">
                        <div class="alert alert-dismissible alert-danger">
                            <a class="" id="mensajeLogin">
                                
                            </a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Usuario
                        </label>
                        <input autofocus="" class="form-control" id="txt_usuario" placeholder="Ususrio" type="text" value="0000000000">
                        </input>
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Clave
                        </label>
                        <input class="form-control" id="txt_contracena" placeholder="Password" type="password" value="admin">
                        </input>
                    </div>
                    <div class="form-group">
                        <div class="utility">
                            <div class="animated-checkbox">
                                <div class="form-group btn-container">
                                    <button class="btn btn-primary btn-sm " id="input-login" onclick="Verificar_login()">
                                        <em class="fa fa-sign-in fa-lg fa-fw">
                                        </em>
                                        Entrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
<!-- Essential javascripts for application to work-->
<script src="../../App/js/jquery-3.3.1.min.js">
</script>
<script src="../../App/public/login.js">
</script>
