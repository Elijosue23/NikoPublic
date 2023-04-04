<?php

session_start();
if (!empty($_SESSION['S_USER'])) {
  

  require '../../Models/InscriptionModels/InscriptionModels.php';
  $inscriptions = new Inscription();
  $data = $inscriptions->GetStudents();

  $Resquest = array('status' => true,'auth' => true,'msg' => 'is autorizado','data'=>$data);
  echo json_encode($Resquest);

}else{

 $Resquest = array('status' => true,'auth' => false,'msg' => 'You are not authenticated to access this module','data'=>'');
  echo json_encode($Resquest);

}



?>