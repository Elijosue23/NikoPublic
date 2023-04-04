<?php 

class UsuarioLogin{
	private $conexion;
	function __construct(){
		require_once '../../App/Config/Connection.php';
		$this->conexion = new conexion();
		$this->conexion->conectar();
	}
	function VerificarUsuario($user,$password){
		try {

          $qsl="select  idusuario, user, names, lastnames, email, nanverIdentification, rolname, password, filePerfil, status from usuarios inner join  roles on roles.idroles = usuarios.rolId  where user = '".$user."'";
			$user = $this->conexion->conexion->prepare($qsl);
			$user->execute();
			$user = $user->fetch();
			return $user;

		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

	}

	function Extraer_contrasena_verifiy($usu_id){
     try {

          $qsl="select idusuario ,password from usuarios where idusuario = '".$usu_id."'";
			$user = $this->conexion->conexion->prepare($qsl);
			$user->execute();
			$user = $user->fetch();
			return $user;

		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

	}

	function Update_Clave_User($usuario,$passNew){
      try {

          $qsl="update usuarios set password = ? where idusuario = ? ";
			$userupdate = $this->conexion->conexion->prepare($qsl);
			$resquest= $userupdate->execute(array($passNew,$usuario));
			return 2;

		} catch (Exception $e) {
			return	array('Error' => $e->getMessage());
		}
		$this->conexion->cerrar();

	}

}

?>