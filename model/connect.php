<?php
	class connect{
		public static function con(){
			$host = '127.0.0.1';
    		$user = "root";                     //Your Cloud 9 username
    		//$user = getenv('C9_USER');
    		$pass = "123456";                             //Remember, there is NO password!
    		$db = "Libros";                      //Your database name you want to connect to
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="mensajes";

    		$conexion = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexion;
		}
		public static function close($conexion){
			mysqli_close($conexion);
		}
		
		public static function conuser(){
			$host = '127.0.0.1';
    		$user = "root";                     //Your Cloud 9 username
    		//$user = getenv('C9_USER');
    		$pass = "";                             //Remember, there is NO password!
    		$db = "Libros";                      //Your database name you want to connect to
    		$port = 3306;                           //The port #. It is always 3306
    		$tabla="users";

    		$conexionuser = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
			return $conexionuser;
		}
		public static function closeuser($conexionuser){
			mysqli_close($conexionuser);
		}
	}
