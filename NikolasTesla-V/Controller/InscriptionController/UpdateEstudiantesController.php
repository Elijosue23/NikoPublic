<?php

session_start();
if (!empty($_SESSION['S_USER'])) {
  
  require '../../Models/InscriptionModels/InscriptionModels.php';
  $inscriptions = new Inscription();


 $idEstudiante = htmlspecialchars($_POST['idEstudiante'] ,ENT_QUOTES,'UTF-8');
 $cedula = htmlspecialchars($_POST['cedula'] ,ENT_QUOTES,'UTF-8');
 $Pasaporte = htmlspecialchars($_POST['Pasaporte'] ,ENT_QUOTES,'UTF-8');
 $Nombres = htmlspecialchars($_POST['Nombres'] ,ENT_QUOTES,'UTF-8');
 $perApellido = htmlspecialchars($_POST['perApellido'] ,ENT_QUOTES,'UTF-8');
 $sdoApellido = htmlspecialchars($_POST['sdoApellido'] ,ENT_QUOTES,'UTF-8');
 $Nacionalidad = htmlspecialchars($_POST['Nacionalidad'] ,ENT_QUOTES,'UTF-8');
 $PaisNacimiento = htmlspecialchars($_POST['PaisNacimiento'] ,ENT_QUOTES,'UTF-8');
 $ProvinciaNacimiento = htmlspecialchars($_POST['ProvinciaNacimiento'] ,ENT_QUOTES,'UTF-8');
 $CartonNacimiento = htmlspecialchars($_POST['CartonNacimiento'] ,ENT_QUOTES,'UTF-8');

 $ParroquiaNacimiento = htmlspecialchars($_POST['ParroquiaNacimiento'] ,ENT_QUOTES,'UTF-8');
 $fechaNacimiento = htmlspecialchars($_POST['fechaNacimiento'] ,ENT_QUOTES,'UTF-8');
 $Sexo = htmlspecialchars($_POST['Sexo'] ,ENT_QUOTES,'UTF-8');
 $genero = htmlspecialchars($_POST['genero'] ,ENT_QUOTES,'UTF-8');
 $EstadoCivil = htmlspecialchars($_POST['EstadoCivil'] ,ENT_QUOTES,'UTF-8');
 $etnia = htmlspecialchars($_POST['etnia'] ,ENT_QUOTES,'UTF-8');
 $tipoSangre = htmlspecialchars($_POST['tipoSangre'] ,ENT_QUOTES,'UTF-8');
 $PaisResidencia = htmlspecialchars($_POST['PaisResidencia'] ,ENT_QUOTES,'UTF-8');
 $sectorResidencia = htmlspecialchars($_POST['sectorResidencia'] ,ENT_QUOTES,'UTF-8');
 $callePrincipal = htmlspecialchars($_POST['callePrincipal'] ,ENT_QUOTES,'UTF-8');

 $calleSecundaria = htmlspecialchars($_POST['calleSecundaria'] ,ENT_QUOTES,'UTF-8');
 $RefeDomiciliaria = htmlspecialchars($_POST['RefeDomiciliaria'] ,ENT_QUOTES,'UTF-8');
 $BarrioCiudadeia = htmlspecialchars($_POST['BarrioCiudadeia'] ,ENT_QUOTES,'UTF-8');
 $CodigoPostal = htmlspecialchars($_POST['CodigoPostal'] ,ENT_QUOTES,'UTF-8');
 $NumeroResidencia = htmlspecialchars($_POST['NumeroResidencia'] ,ENT_QUOTES,'UTF-8');
 $telefonoMovil = htmlspecialchars($_POST['telefonoMovil'] ,ENT_QUOTES,'UTF-8');
 $telefijos = htmlspecialchars($_POST['telefijos'] ,ENT_QUOTES,'UTF-8');
 $CorreoElectronico = htmlspecialchars($_POST['CorreoElectronico'] ,ENT_QUOTES,'UTF-8');
 $CorreoInstitucional = htmlspecialchars($_POST['CorreoInstitucional'] ,ENT_QUOTES,'UTF-8');
 $Colegio = htmlspecialchars($_POST['Colegio'] ,ENT_QUOTES,'UTF-8');

 $Especialidad = htmlspecialchars($_POST['Especialidad'] ,ENT_QUOTES,'UTF-8');
 $CentroInformacion = htmlspecialchars($_POST['CentroInformacion'] ,ENT_QUOTES,'UTF-8');
 $Sede = htmlspecialchars($_POST['Sede'] ,ENT_QUOTES,'UTF-8');
 $Modalidad = htmlspecialchars($_POST['Modalidad'] ,ENT_QUOTES,'UTF-8');
 $Programa = htmlspecialchars($_POST['Programa'] ,ENT_QUOTES,'UTF-8');
 $malla = htmlspecialchars($_POST['malla'] ,ENT_QUOTES,'UTF-8');
 $Sescion = htmlspecialchars($_POST['Sescion'] ,ENT_QUOTES,'UTF-8');
 $Periodo = htmlspecialchars($_POST['Periodo'] ,ENT_QUOTES,'UTF-8');
 $OpcionesRegistro = htmlspecialchars($_POST['OpcionesRegistro'] ,ENT_QUOTES,'UTF-8');
 $Asesor = htmlspecialchars($_POST['Asesor'] ,ENT_QUOTES,'UTF-8');

  $dateInscription = htmlspecialchars($_POST['dateInscription'] ,ENT_QUOTES,'UTF-8');
  $CodigoPromocion = htmlspecialchars($_POST['CodigoPromocion'] ,ENT_QUOTES,'UTF-8');
  $Archivador = htmlspecialchars($_POST['Archivador'] ,ENT_QUOTES,'UTF-8');
  $ComoNosConocio = htmlspecialchars($_POST['ComoNosConocio'] ,ENT_QUOTES,'UTF-8');
  $RazonesInscribirse = htmlspecialchars($_POST['RazonesInscribirse'] ,ENT_QUOTES,'UTF-8');
  $Observaciones = htmlspecialchars($_POST['Observaciones'] ,ENT_QUOTES,'UTF-8');
  $vectorSelect = htmlspecialchars($_POST['vectorSelect'] ,ENT_QUOTES,'UTF-8');//45

  $options = explode(",",$vectorSelect);


  $resqest =  $inscriptions->Update_EstudientsModels($idEstudiante,
$cedula,$Pasaporte,$Nombres,$perApellido,$sdoApellido,$Nacionalidad,$PaisNacimiento,$ProvinciaNacimiento,$CartonNacimiento,$ParroquiaNacimiento,$fechaNacimiento,$Sexo,$genero,$EstadoCivil,$etnia,$tipoSangre,$PaisResidencia,$sectorResidencia,$callePrincipal,$calleSecundaria,$RefeDomiciliaria,$BarrioCiudadeia,$CodigoPostal,$NumeroResidencia,$telefonoMovil,$telefijos,$CorreoElectronico,$CorreoInstitucional,$Colegio,$Especialidad,$CentroInformacion,$Sede,$Modalidad,$Programa,$malla,$Sescion,$Periodo,$OpcionesRegistro,$Asesor,$dateInscription,$CodigoPromocion,$Archivador,$ComoNosConocio,$RazonesInscribirse,$Observaciones);


  if ( $resqest>0) {
   $resquestdata = $inscriptions->UpdateOpstionsEstudients($idEstudiante);
     //UPDATE 
        for ($i=0; $i <count($options) ; $i++) { 
          if ($options[$i] !='') {
          
              $resquestdata = $inscriptions->RegisterOpstionsEstudients($options[$i],$idEstudiante);

            }
      }
        
      

 $Resquest = array('status' => true,'auth' => true,'msg' => 'Se  Actualizo con exito!','data'=>$resquestdata);
 echo json_encode($Resquest);

    
  }
  else{

     $Resquest = array('status' => true,'auth' => true,'msg' => 'Error al intentar Actualizar !','data'=>$resquestdata);
       echo json_encode($Resquest);
  }
  

}else{

 $Resquest = array('status' => true,'auth' => false,'msg' => 'You are not authenticated to access this module','data'=>'');
  echo json_encode($Resquest);

}



?>