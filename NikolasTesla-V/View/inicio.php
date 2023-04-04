 <?php
session_start();
?>
<script type="text/javascript" src="../App/public/fuctions.js?rev=<?php echo time();?>"></script>
<div class="col-lg-12">
            <div class="bs-component">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="#">
                            <strong>
                                Mi cuenta
                            </strong>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
  <style type="text/css">

    </style>
        <div class="row" >
            <div class="col-md-3">
                <div class="tile p-0">
                    <div class="tile-body">
                        <div style="text-align: center;justify-content: center;">
                            <img src="../App/img/user_perfil.png" style="width: 250px;height: 250px">
                            </img>
                        </div>
                        <div style="text-align: center;">
                            <div style=" justify-content: center;">
                                <button class="btn btn-info btn-sm">
                                    <em class="fa fa-solid fa-upload fa-lg">
                                    </em>
                                    Subir foto
                                </button>
                                <button class="btn btn-info btn-sm">
                                    <em class="fa fa-solid fa-qrcode fa-lg">
                                    </em>
                                    Mostrar QR
                                </button>
                            </div>
                        </div>
                        <br>
                            <div style="text-align: center;">
                                <h6>
                                    <strong>
                                        <?php echo $_SESSION['S_NOMBRE'].',' .$_SESSION['S_LASTNOMBRE'] ?>

                                    </strong>
                                </h6>
                                <div>
                                    <div class="form-group">
                                        <label class="col-form-label ">
                                            N° Identificacion:
                                        </label>
                                        <label>
                                             <?php echo $_SESSION['S_USER']; ?>
                                        </label>
                                        <br>
                                            <label class="col-form-label ">
                                                Correo Electronico:
                                            </label>
                                            <label>
                                                <?php echo $_SESSION['S_EMAIL']; ?>
                                            </label>
                                        </br>
                                    </div>
                                </div>
                            </div>
                        </br>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tile">
                    <div class="mailbox-controls">
                        <h5>
                            <i class="fa-solid fa-people-group">
                            </i>
                            Grupos:
                            <strong>
                                SISTEMAS,ADMINISTRATIVOS
                            </strong>
                        </h5>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="filter" placeholder="search" type="text">
                        </input>
                    </div>
                    <h5> GRUPOS COMUNES </h5>
                    <div class="row" id="component_Search">
                      
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
 $(document).ready(function() {
   Get_ModulosRequest();

} );
 const filter = document.getElementById('filter');
 filter.addEventListener('input', (e) => filterData(e.target.value))

</script>