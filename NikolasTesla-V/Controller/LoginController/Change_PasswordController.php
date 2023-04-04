<?php


session_start();

if (!empty($_SESSION['S_USER'])) {
  $usuario = $_SESSION['S_IDUSUARIO'];

 require '../../Models/LoginModels/UserModels.php';
  $modelsuser = new UsuarioLogin();

  $passActual = htmlspecialchars($_POST['passActual'],ENT_QUOTES,'UTF-8');
  $passNew = htmlspecialchars($_POST['passNew'],ENT_QUOTES,'UTF-8');

     if (empty($passActual) || empty($passNew)) {

    $response = array('status' => true,'auth' => true,'msg' => 'Ingrese las Claves','data'=>'');
    echo json_encode($response);

    return;
  }



  $consulta = $modelsuser->Extraer_contrasena_verifiy($usuario);

//////////////////

  if(password_verify($passActual, $consulta["password"])){

   if(password_verify($passNew, $consulta["password"])){
    

    $response = array('status' => true,'auth' => true,'msg' => 'La Clave a sido utilizado Anteriormente','data'=>'');
    echo json_encode($response);
    return;

   }else{

     $passNew = password_hash($passNew,PASSWORD_ARGON2I,['cost'=>10]);

     $Request = $modelsuser->Update_Clave_User($usuario,$passNew);

      $response = array('status' => true,'auth' => true,'msg' => 'La Clave se Cambio Corectamente. Deves cerrar sessión para ingresar con la clave nueva.','data'=>$Request);

    echo json_encode($response);

   }


}else{
    $response = array('status' => true,'auth' => true,'msg' => 'La Clave Actual  ingresado es incorecto !!','data'=>'');
    echo json_encode($response);
    return;

}


}else{
  
  $response = array('status' => true,'auth' => false,'msg' => 'NO AUTORIZADO PARA ESTA SECCION!!','data'=>'');
  echo json_encode($response);

}


?>