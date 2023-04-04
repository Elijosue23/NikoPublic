

<?php

session_start();
if (!empty($_SESSION['S_USER'])) {
  require '../../Models/InscriptionModels/InscriptionModels.php';
  $inscriptions = new Inscription();

  $idstudent = htmlspecialchars($_POST['idstudents'],ENT_QUOTES,'UTF-8');

  $Request = $inscriptions->GetShowEstudientsModels($idstudent);
  echo json_encode($Request);
 }
 else{
 	return 0;
 }


?>