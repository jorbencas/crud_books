<?php
    include("model/connect.php");

	class DAOUser{
		function insert_user($datos){
          $ISBN=$datos['ISBN'];
          $titulo=$datos['titulo'];
        	$genero=$datos['genero'];
        	$tipo_de_tapa=$datos['tipo_de_tapa'];
        	$autor=$datos['autor'];
        	$descripcion=$datos['descripcion'];
          $idioma=$datos['idioma'];
        	$fecha_de_publicacion=$datos['fecha_de_publicacion'];
          $sql = " INSERT INTO mensajes (ISBN, titulo, genero, tipo_de_tapa, descripcion, autor, fecha_de_publicacion, idioma, hora, fecha)
        		 VALUES ('$ISBN', '$titulo', '$genero', '$tipo_de_tapa','$descripcion', '$autor', '$fecha_de_publicacion', '$idioma', now(), now())";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		} 

		function select_all_user(){
			$sql = "SELECT * FROM mensajes ORDER BY ISBN ASC";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function select_user($ISBN){
			$sql = "SELECT * FROM mensajes WHERE ISBN='$ISBN'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}

		function update_user($datos){
      $ISBN=$datos['ISBN'];
      $titulo=$datos['titulo'];
      $genero=$datos['genero'];
      $tipo_de_tapa=$datos['tipo_de_tapa'];
      $autor=$datos['autor'];
      $descripcion=$datos['descripcion'];
      $idioma=$datos['idioma'];
      $fecha_de_publicacion=$datos['fecha_de_publicacion'];
      $sql = " UPDATE mensajes SET titulo='$titulo', genero='$genero', tipo_de_tapa='$tipo_de_tapa', autor='$autor', descripcion='$descripcion', fecha_de_publicacion='$fecha_de_publicacion', idioma='$idioma' WHERE ISBN='$ISBN'";
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}

		function delete_user($ISBN){
			$sql = "DELETE FROM mensajes WHERE ISBN='$ISBN'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

    function delete_all(){
          $sql = "DELETE  FROM mensajes";

          $conexion = connect::con();
          $res = mysqli_query($conexion, $sql);
          connect::close($conexion);
          return $res;
      }
	}
