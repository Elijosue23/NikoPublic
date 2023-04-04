
<?php

session_start();
if (!empty($_SESSION['S_USER'])) {
    require '../../Models/InscriptionModels/InscriptionModels.php';
  $inscriptions = new Inscription();
    $consulta = $inscriptions->GetPisesMpodel();
    echo json_encode($consulta);

}else{

	echo 0;
}
?>