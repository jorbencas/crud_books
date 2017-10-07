<?php

	$username=$_POST['user'];
	$pass=$_POST['password'];
	echo $username;
	echo $pass;
	
	mysql_connect("localhost","root","");
	mysql_select_db("Libros");

	$sql=mysql_query("SELECT * FROM users WHERE user='$username' and password='$pass'");
	$f2=mysql_fetch_array($sql);
	print_r($f2);
		if( $username == $f2['user'] and $pass==$f2['password']){
			session_start();
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		}else{
			echo "Error";
		}
?>