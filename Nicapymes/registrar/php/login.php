<?php

if(!empty($_POST)){
	if(isset($_POST["Idusuario"]) &&isset($_POST["Contraceña"])){
		if($_POST["Idusuario"]!=""&&$_POST["Contraceña"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$sql1= "select * from bdnicapymes where (Idusuario=\"$_POST[Idusuario]\" or email=\"$_POST[	Correo]\") and password=\"$_POST[Contraceña]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["Idusuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}



?>