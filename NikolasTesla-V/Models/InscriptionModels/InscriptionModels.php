<?php 

class Inscription{
	private $conexion;
	function __construct(){
		require_once '../../App/Config/Connection.php';
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}
	function GetStudents(){
		$sql="select id,Nombres,perApellido,sdoApellido,cedula,fechaNacimiento,CorreoElectronico,CorreoInstitucional,telefonoMovil,nameMalla,namesProgram FROM studnt
         inner join  malla on malla.idmalla = studnt.malla
          inner join  programa on programa.idprograma = studnt.Programa";
		try {
			$students = $this->conexion->conexion->prepare($sql);
			$students->execute();
			$students = $students->fetchAll();
			return $students;
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();
	}
function GetModulosModels(){
try {       $sql="select idmodul, namemoduls, description, imgmodulo from moduls";
			$moduls = $this->conexion->conexion->prepare($sql);
			$moduls->execute();
			$moduls = $moduls->fetchAll();
			return $moduls;
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}


function GetMallaCurricular(){
try {       $sql="select idmalla, nameMalla from malla";
			$moduls = $this->conexion->conexion->prepare($sql);
			$moduls->execute();
			$moduls = $moduls->fetchAll();
			return $moduls;
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function GetProgram(){
try {       $sql="select idprograma, namesProgram from programa";
			$moduls = $this->conexion->conexion->prepare($sql);
			$moduls->execute();
			$moduls = $moduls->fetchAll();
			return $moduls;
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function GetPisesMpodel(){
try {       $sql="select idpaises, NamePais from paises";
			$moduls = $this->conexion->conexion->prepare($sql);
			$moduls->execute();
			$moduls = $moduls->fetchAll();
			return $moduls;
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function GetExitennteID($restId){
 try {

          $qsl="select idStudent from opciones where idStudent = '".$restId."'";
			$user = $this->conexion->conexion->prepare($qsl);
			$user->execute();
			$user = $user->fetch();
			return $user;

		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function UpdateOpstionsEstudients($restId){

try {
          $alumno = $this->conexion->conexion->prepare("delete from options where istuduent = " . $restId );
            $alumno->execute();
			return 1;

		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function RegisterOpstionsEstudients($options,$restId){

  try {

	$userupdate = $this->conexion->conexion->prepare("insert into options (stade,istuduent) values (?,?)");
	$resquest= $userupdate->execute(array($options,$restId));
	return  1;
			
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function GetOptions($idstudent){
try {      
           $qsl="select stade  from options where istuduent = '".$idstudent."'";
			$moduls = $this->conexion->conexion->prepare($qsl);
			$moduls->execute();
			$moduls = $moduls->fetchAll();
			return $moduls;
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function GetShowEstudientsModels($idstudent){
 try {
          $qsl="select id,cedula, Pasaporte, Nombres, perApellido, sdoApellido, Nacionalidad, PaisNacimiento, ProvinciaNacimiento, CartonNacimiento, ParroquiaNacimiento, fechaNacimiento, Sexo, genero, EstadoCivil, etnia, tipoSangre, PaisResidencia, sectorResidencia, callePrincipal, calleSecundaria,RefeDomiciliaria, BarrioCiudadeia, CodigoPostal, NumeroResidencia, telefonoMovil, telefijos, CorreoElectronico, CorreoInstitucional, Colegio, Especialidad, CentroInformacion, Sede, Modalidad, Programa, malla, Sescion, Periodo, OpcionesRegistro, Asesor, dateInscription, CodigoPromocion, Archivador, ComoNosConocio, RazonesInscribirse, Observaciones from studnt where id = '".$idstudent."'";
			$user = $this->conexion->conexion->prepare($qsl);
			$user->execute();
			$user = $user->fetch();
			return $user;

		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}

function Post_EstudientsModels(
    $cedula,$Pasaporte,$Nombres,$perApellido,$sdoApellido,$Nacionalidad,$PaisNacimiento,$ProvinciaNacimiento,$CartonNacimiento,$ParroquiaNacimiento,$fechaNacimiento,$Sexo,$genero,$EstadoCivil,$etnia,$tipoSangre,$PaisResidencia,$sectorResidencia,$callePrincipal,$calleSecundaria,$RefeDomiciliaria,$BarrioCiudadeia,$CodigoPostal,$NumeroResidencia,$telefonoMovil,$telefijos,$CorreoElectronico,$CorreoInstitucional,$Colegio,$Especialidad,$CentroInformacion,$Sede,$Modalidad,$Programa,$malla,$Sescion,$Periodo,$OpcionesRegistro,$Asesor,$dateInscription,$CodigoPromocion,$Archivador,$ComoNosConocio,$RazonesInscribirse,$Observaciones){
      try {

      $qsl = "insert into studnt (cedula, Pasaporte, Nombres, perApellido, sdoApellido, Nacionalidad, PaisNacimiento, ProvinciaNacimiento, CartonNacimiento, ParroquiaNacimiento, fechaNacimiento, Sexo, genero, EstadoCivil, etnia, tipoSangre, PaisResidencia, sectorResidencia, callePrincipal, calleSecundaria,RefeDomiciliaria, BarrioCiudadeia, CodigoPostal, NumeroResidencia, telefonoMovil, telefijos, CorreoElectronico, CorreoInstitucional, Colegio, Especialidad, CentroInformacion, Sede, Modalidad, Programa, malla, Sescion, Periodo, OpcionesRegistro, Asesor, dateInscription, CodigoPromocion, Archivador, ComoNosConocio, RazonesInscribirse, Observaciones) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$userupdate = $this->conexion->conexion->prepare($qsl);
			$resquest= $userupdate->execute(array($cedula,$Pasaporte,$Nombres,$perApellido,$sdoApellido,$Nacionalidad,$PaisNacimiento,$ProvinciaNacimiento,$CartonNacimiento,$ParroquiaNacimiento,$fechaNacimiento,$Sexo,$genero,$EstadoCivil,$etnia,$tipoSangre,$PaisResidencia,$sectorResidencia,$callePrincipal,$calleSecundaria,$RefeDomiciliaria,$BarrioCiudadeia,$CodigoPostal,$NumeroResidencia,$telefonoMovil,$telefijos,$CorreoElectronico,$CorreoInstitucional,$Colegio,$Especialidad,$CentroInformacion,$Sede,$Modalidad,$Programa,$malla,$Sescion,$Periodo,$OpcionesRegistro,$Asesor,$dateInscription,$CodigoPromocion,$Archivador,$ComoNosConocio,$RazonesInscribirse,$Observaciones));
			return  $this->conexion->conexion->lastInsertId();
			
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();
	}

function Update_EstudientsModels($idEstudiante,
$cedula,$Pasaporte,$Nombres,$perApellido,$sdoApellido,$Nacionalidad,$PaisNacimiento,$ProvinciaNacimiento,$CartonNacimiento,$ParroquiaNacimiento,$fechaNacimiento,$Sexo,$genero,$EstadoCivil,$etnia,$tipoSangre,$PaisResidencia,$sectorResidencia,$callePrincipal,$calleSecundaria,$RefeDomiciliaria,$BarrioCiudadeia,$CodigoPostal,$NumeroResidencia,$telefonoMovil,$telefijos,$CorreoElectronico,$CorreoInstitucional,$Colegio,$Especialidad,$CentroInformacion,$Sede,$Modalidad,$Programa,$malla,$Sescion,$Periodo,$OpcionesRegistro,$Asesor,$dateInscription,$CodigoPromocion,$Archivador,$ComoNosConocio,$RazonesInscribirse,$Observaciones){
try {


$qsl="update studnt set cedula= ?, Pasaporte= ?, Nombres= ?, perApellido= ?, sdoApellido= ?, Nacionalidad= ?, PaisNacimiento= ?, ProvinciaNacimiento= ?, CartonNacimiento= ?, ParroquiaNacimiento= ?, fechaNacimiento= ?, Sexo= ?, genero= ?, EstadoCivil= ?, etnia= ?, tipoSangre= ?, PaisResidencia= ?, sectorResidencia= ?, callePrincipal= ?, calleSecundaria= ?,RefeDomiciliaria= ?, BarrioCiudadeia= ?, CodigoPostal= ?, NumeroResidencia= ?, telefonoMovil= ?, telefijos= ?, CorreoElectronico= ?, CorreoInstitucional= ?, Colegio= ?, Especialidad= ?, CentroInformacion= ?, Sede= ?, Modalidad= ?, Programa= ?, malla= ?, Sescion= ?, Periodo= ?, OpcionesRegistro= ?, Asesor= ?, dateInscription= ?, CodigoPromocion= ?, Archivador= ?, ComoNosConocio= ?, RazonesInscribirse= ?, Observaciones= ?  where id = ? ";

$userupdate = $this->conexion->conexion->prepare($qsl);
$resquest= $userupdate->execute(array(
$cedula,$Pasaporte,$Nombres,$perApellido,$sdoApellido,$Nacionalidad,$PaisNacimiento,$ProvinciaNacimiento,$CartonNacimiento,$ParroquiaNacimiento,$fechaNacimiento,$Sexo,$genero,$EstadoCivil,$etnia,$tipoSangre,$PaisResidencia,$sectorResidencia,$callePrincipal,$calleSecundaria,$RefeDomiciliaria,$BarrioCiudadeia,$CodigoPostal,$NumeroResidencia,$telefonoMovil,$telefijos,$CorreoElectronico,$CorreoInstitucional,$Colegio,$Especialidad,$CentroInformacion,$Sede,$Modalidad,$Programa,$malla,$Sescion,$Periodo,$OpcionesRegistro,$Asesor,$dateInscription,$CodigoPromocion,$Archivador,$ComoNosConocio,$RazonesInscribirse,$Observaciones,$idEstudiante));
			return 1;
			
		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

}


}

?>