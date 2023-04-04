<?php

 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require '../../Models/LoginModels/UserModels.php';
  $modelsuser = new UsuarioLogin();
  $user = htmlspecialchars($_POST['usuario'],ENT_QUOTES,'UTF-8');
  $password = htmlspecialchars($_POST['contracena'],ENT_QUOTES,'UTF-8');
 
  $min = 3;
  $max = 16;
  if (strlen($user)>=$min && strlen($user)<=$max) {


    if ($user === limpiar_cadena($user)) {

      $consulta = $modelsuser->VerificarUsuario($user,$password);

      if(count($consulta, COUNT_RECURSIVE)>0){

        
        if(password_verify($password, $consulta['password'])){

         if ($consulta['status']=='ACTIVO') {

           require 'Create_sessionController.php';

           $util = new Util();

           $consulta= $util->Generara_Seccion_Usuario($consulta);

           $response = array('status' => true,'mensaje' => 'Exito','data'=>$consulta,'session' => true,);
           echo json_encode($response,JSON_UNESCAPED_UNICODE);

         }else{

           $response = array('status' => true,'mensaje' => 'Su Cuenta esta inactivo !!','data'=>'','session' => false,);
           echo json_encode($response,JSON_UNESCAPED_UNICODE);
         }

       }else{
        $response = array('status' => true,'mensaje' => 'La contraseña ingresado es incorecto !!','data'=>'','session' => false,);
        echo json_encode($response,JSON_UNESCAPED_UNICODE);
      }


    }else{
      $response = array('status' => true,'mensaje' => 'Usuario no se encuentra registrado !!','data'=>$consulta,'session' => false,);


      echo json_encode($response,JSON_UNESCAPED_UNICODE);
    }

  }else{
   $consulta = $_SERVER['REMOTE_ADDR'];

   $response = array('status' => true,'mensaje' => 'Ud. esta intentando burlar el sistema!!','data'=>isset($consulta),'session' => false,);
   echo json_encode($response,JSON_UNESCAPED_UNICODE);
 }
}else{
  
  $response = array('status' => true,'mensaje' => 'Usuario debe ser mayor a '.$min.' y menor a '.$max.' caracteres !!','data'=>'','session' => false,);
  echo json_encode($response,JSON_UNESCAPED_UNICODE);
}    



}else{

  echo  http_response_code(405);
}



    # Verificar datos #
  function verificar_datos($filtro,$cadena){
    if(preg_match("/^".$filtro."$/", $cadena)){
      return false;
    }else{
      return true;
    }
  }


    # Limpiar cadenas de texto #
  function limpiar_cadena($cadena){
    $cadena=trim($cadena);
    $cadena=stripslashes($cadena);
    $cadena=str_ireplace("<script>", "", $cadena);
    $cadena=str_ireplace("</script>", "", $cadena);
    $cadena=str_ireplace("<script src", "", $cadena);
    $cadena=str_ireplace("<script type=", "", $cadena);
    $cadena=str_ireplace("SELECT * FROM", "", $cadena);
    $cadena=str_ireplace("DELETE FROM", "", $cadena);
    $cadena=str_ireplace("INSERT INTO", "", $cadena);
    $cadena=str_ireplace("DROP TABLE", "", $cadena);
    $cadena=str_ireplace("DROP DATABASE", "", $cadena);
    $cadena=str_ireplace("TRUNCATE TABLE", "", $cadena);
    $cadena=str_ireplace("SHOW TABLES;", "", $cadena);
    $cadena=str_ireplace("SHOW DATABASES;", "", $cadena);
    $cadena=str_ireplace("<?php", "", $cadena);
    $cadena=str_ireplace("?>", "", $cadena);
    $cadena=str_ireplace("--", "", $cadena);
    $cadena=str_ireplace("^", "", $cadena);
    $cadena=str_ireplace("<", "", $cadena);
    $cadena=str_ireplace("[", "", $cadena);
    $cadena=str_ireplace("]", "", $cadena);
    $cadena=str_ireplace("==", "", $cadena);
    $cadena=str_ireplace(";", "", $cadena);
    $cadena=str_ireplace("::", "", $cadena);
    $cadena=trim($cadena);
    $cadena=stripslashes($cadena);
    return $cadena;
  }

  ?>