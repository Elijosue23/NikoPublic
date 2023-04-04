<?php

class Util {
public function Generara_Seccion_Usuario($consulta){
 $lifetime=600;
  session_set_cookie_params($lifetime);
 
session_start();
$_SESSION['S_IDUSUARIO']=$consulta['idusuario'];
$_SESSION['S_USER']=$consulta['user'];
$_SESSION['S_NOMBRE']=$consulta['names'];
$_SESSION['S_LASTNOMBRE']=$consulta['lastnames'];
$_SESSION['S_EMAIL']=$consulta['email'];
$_SESSION['S_ROL']=$consulta['rolname'];
$_SESSION['S_FILE_IMG']=$consulta['filePerfil'];

setcookie("activo", 1, time() + 3600);
setcookie("token", $this->getToken(9), time() + 3600);
setcookie("user_Anonimus", $this->getToken(6),time() + 3600);
return $consulta['names'];
	
}

    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i = 0; $i < $length; $i ++) {
            $token .= $codeAlphabet[$this->cryptoRandSecure(0, $max)];
        }
        return $token;
    }
    
    public function cryptoRandSecure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) {
            return $min; // not so random...
        }
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }
    
   


 public function token_generator(){
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    return $token;
}
}
?>