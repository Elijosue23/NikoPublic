
<?php $idmodulo = htmlspecialchars($_GET["modulo"],ENT_QUOTES,'UTF-8'); $Modulo="INSCRIPCIONES" ?>
<?php if (!empty($idmodulo) && $idmodulo==8) { 

  ?>
<script type="text/javascript" src="../App/public/inscriptions.js?rev=<?php echo time();?>"></script>
   
        <div class="col-lg-12">
            <div class="bs-component">
               <div class="mailbox-controls" style=" background:#e9ecef;border-radius: 5px">
                  <div class="animated-checkbox">
                    Home/  <strong ><?php echo $Modulo; ?> </strong>
                </div>
                <div class="btn-group">
                    <a class="btn btn-secondary btn-sm" type="button" style="margin-top: 10px;
                    margin-right: 10px;" href="../View/Login/login.php" ><em class="fa fa-arrow-left"></em>Atras</a>
                </div>
            </div>
            
        </div>
    </div>

      <style type="text/css">



    </style>
<div class="col-md-12">
          <div class="tile">
            <div class="tile-body">

           <h5>Estudiantes</h5>
        <section class="invoice">
              <div class="row invoice-info">
                <div class="col-4">
                  <button class="btn btn-success btn-sm" type="button" onclick="OpenModalInscritions()"><i class="fa fa-plus" aria-hidden="true"></i>Adicional</button>
                  <button class="btn btn-info btn-sm" type="button"><i class="fa fa-cog fa-lg"></i>Opsiones</button>
                </div>
               <div class="col-4 searc_end" >
               <input  id="BuscadorFilter" onkeyup="Buscar();" class="form-control" style="border-radius: 5px; height: 30px;margin-right: 5%">
                  <div id="div_btn" style="width: 100%;margin-left: -10px;">
                    <button class="btn btn-info btn-sm" type="button" ><i class="fa fa-search" aria-hidden="true"></i>Buscar</button>

                 </div>
                </div>
                
                <div class="col-4">
                   

                </div>
              </div>
            </section><br>

            <table class="table table-bordered table-sm" id="htmlTable">
                        <thead>
                            <tr style="background: #f6f7f9">
                                <th class="">
                                    N°
                                </th>
                                <th class="">
                                    Nombres
                                </th>
                                <th class="vertical">
                                    <div class="vertical">
                                        <span class="badge badge-primary ">
                                            <strong>
                                                Edad
                                            </strong>
                                        </span>
                                    </div>
                                </th>
                                 <th class="">
                                    Nivel/Matrícula
                                </th>
                                 <th class="">
                                    Identificación
                                </th>
                                 <th class="">
                                    Usuario
                                </th>
                                 <th class="">
                                    Email/Teléfono
                                </th>
                                 <th class="">
                                    Programa
                                </th>
                                <th class="vertical">
                                    <div class="vertical">
                                        <span class="badge badge-primary ">
                                            <strong>
                                                Matricula
                                            </strong>
                                        </span>
                                    </div>
                                </th>
                                <th class="vertical">
                                    <div class="vertical">
                                        <span class="badge badge-primary ">
                                            <strong>
                                                Aut.límite
                                            </strong>
                                        </span>
                                    </div>
                                </th>
                                <th class="vertical">
                                    <div class="vertical">
                                        <span class="badge badge-primary ">
                                            <strong>
                                                Perfil
                                            </strong>
                                        </span>
                                    </div>
                                </th>
                                <th class="vertical">
                                    <div class="vertical">
                                        <span class="badge badge-primary ">
                                            <strong>
                                                Usuario
                                            </strong>
                                        </span>
                                    </div>
                                </th>
                                <th class="vertical">
                                    <div class="vertical">
                                        <span class="badge badge-primary ">
                                            <strong>
                                                Foto
                                            </strong>
                                        </span>
                                    </div>
                                </th>
                                 <th class="">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table_Estudienst">

                        </tbody>
            </table>


            </div>
          </div>
        </div>


<?php  }else{ ?>

   <div class="col-md-12">
  <div class="bs-component">
               <div class="mailbox-controls" style=" background:#e9ecef;border-radius: 5px">
                  <div class="animated-checkbox">
                    Home/  <strong ><?php echo $Modulo; ?> </strong>
                </div>
                <div class="btn-group">
                    <a class="btn btn-primary btn-sm" type="button" style="margin-top: 10px;
                    margin-right: 10px;" href="../View/Login/login.php" ><em class="fa fa-reply"></em>Atraz</a>
                </div>
            </div>
            
        </div>

      <div class="alert alert-dismissible alert-danger">
        <button class="close" type="button" data-dismiss="alert">×</button><strong>Ups!</strong><a class="alert-link" href="#">Module not implemented at the moment ....Sorry we are working on these parts we ask you a little more patience</a> 😥
    </div>


</div>

<?php }?>

<?php include "../modals/modals_registroEstudiantes.php" ?>

<script type="text/javascript">


 $(document).ready(function() {

 Listtar_Estudiantes();

} );
  
   $("#fromIncripts input[data='requered']").on('keydown', function(e) {
    updateValue(e);

})

$("#fromIncripts select[data='selectrequiered']").on('change', function(e) {
  ValidadSelect(e);
});

  
</script>