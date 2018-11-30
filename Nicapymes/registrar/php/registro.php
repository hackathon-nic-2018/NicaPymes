<?php

if(!empty($_POST)){
	if(isset($_POST["Usuario"]) &&isset($_POST["Nombre"]) &&isset($_POST["Correo"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["Usuario"]!=""&& $_POST["Nombre"]!=""&&$_POST["Correo"]!=""&&$_POST["Contraceña"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from bdnicapymes where Usuario=\"$_POST[Usuario]\" or Correo=\"$_POST[Correo]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}
			$sql = "insert into user(Usuario,Nombre,Correo,password,created_at) value (\"$_POST[Usuario]\",\"$_POST[Nombre]\",\"$_POST[Correo]\",\"$_POST[Contraceña]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
			}
		}
	}
}



?>