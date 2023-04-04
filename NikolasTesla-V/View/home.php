<?php
session_start();
if(!isset($_SESSION['S_IDUSUARIO'])){
    header('Location: ../View/Login/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." name="description">
            <!-- Twitter meta-->
            <link href="../App/css/main.css" rel="stylesheet" type="text/css">
             <link href="../App/css/new_main.css" rel="stylesheet" type="text/css">
                <!-- Font-icon css-->
                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                </link>
            </link>
        </meta>
    </head>

 <style type="text/css">
     .swal2-popup {
    
    font-size: 0.7rem !important;
}
.swal2-styled.swal2-confirm {
   
    background-color: #19099b !important;
    }
 </style>

<body class="app sidebar-mini pace-done sidenav-toggled">
    <!-- Navbar-->
    <?php 
    include "Menu/header.php";
   
     ?>
    <!-- Sidebar menu-->
    <main class="app-content" style="background: #ffff">
        <div id="Contenido_view"></div>

    </main>
</body>
<!-- Essential javascripts for application to work-->

<script src="../App/js/jquery-3.3.1.min.js">
</script>
<script src="../App/js/popper.min.js">
</script>
<script src="../App/js/bootstrap.min.js">
</script>
<script src="../App/js/main.js">
</script>
<script src="../App/js/sweetalert2.js">
</script>
<script src="..//App/public/login.js">
</script>

<script type="text/javascript">
 $(document).ready(function() {

  var contenedor='Contenido_view';
  var contenido='inicio.php';
  cargar_contenido(contenedor,contenido);

} );

 function cargar_contenido(contenedor,contenido){
      $("#"+contenedor).load(contenido);
     }



</script>

</html>