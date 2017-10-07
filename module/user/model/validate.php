
<?php
function validate_isbn($isbn){
	$reg="/^[0-9]*$/";
	return preg_match($reg,$isbn);
}
	function validate_titulo($titulo){
		$reg="/^[a-zA-Z0-9]*$/";
		return preg_match($reg,$titulo);
	}
	function validate_genere($genero){
		$reg="/^[a-zA-Z0-9]*$/";
		return preg_match($reg,$genero);
	}
	function validate_descripcion($descripcion){
		$reg="/^[a-zA-Z0-9]*$/";
		return preg_match($reg,$descripcion);
	}
	function validate_autor($autor){
		$reg="/^[a-zA-Z0-9]*$/";
		return preg_match($reg,$autor);

	}

function validate(){
$check=true;

$error=array();
$v_isbn=$_POST['ISBN'];
$v_usuario=$_POST['titulo'];
$v_password=$_POST['genero'];
$v_nombre=$_POST['autor'];
$v_DNI=$_POST['descripcion'];

$r_isbn=validate_isbn($v_isbn);
$r_usuario=validate_titulo($v_usuario);
$r_password=validate_genere($v_password);
$r_nombre=validate_autor($v_nombre);
$r_DNI=validate_descripcion($v_DNI);

if(!$r_isbn){
		$e_ISBN = " El ISBN introducido no es valido";
		$check=false;
}else{
		$e_ISBN = "";
}
if($r_usuario !== 1){
		$e_titulo = " El titulo introducido no es valido";
		$check=false;
}else{
		$e_titulo = "";
}
if($r_password !== 1){
		$e_genero = " El genero introducido no es valida";
		$check=false;
}else{
		$e_genero = "";
}
if($r_nombre !== 1){
		$e_autor = " * El autor introducido no es valido";
		$check=false;
}else{
		$e_autor = "";
}
if($r_DNI !== 1){
		$e_descripcion = " * La descripción introducida no es valido";
		$check=false;
}else{
		$e_descripcion = "";
}

$error = array(
				'ISBN'=>$e_ISBN,
				'titulo' => $e_titulo,
				'genero' => $e_genero,
				'autor' => $e_autor,
				'descripcion' => $e_descripcion,
				);
$resultado=array('resultado'=>$check , 'error'=>$error);
return $resultado;

//return $check;
}
?>
