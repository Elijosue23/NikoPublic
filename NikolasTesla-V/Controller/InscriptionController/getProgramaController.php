<?php

session_start();
if (!empty($_SESSION['S_USER'])) {
    require '../../Models/InscriptionModels/InscriptionModels.php';
  $inscriptions = new Inscription();
    $consulta = $inscriptions->GetProgram();
    echo json_encode($consulta);

}else{

	echo 0;
}
?>