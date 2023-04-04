<?php

session_start();
if (!empty($_SESSION['S_USER'])) {
    require '../../Models/InscriptionModels/InscriptionModels.php';
  $inscriptions = new Inscription();
   $idstudent = htmlspecialchars($_POST['id'],ENT_QUOTES,'UTF-8');
    $consulta = $inscriptions->GetOptions($idstudent);
    echo json_encode($consulta);

}else{

	echo 0;
}
?>