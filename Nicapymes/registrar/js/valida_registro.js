with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && Usuario.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			Usuario.focus();
		}
		if(ok &&Nombre.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			Nombre.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su email");
			email.focus();
		}
		if(ok && Contraceña.value==""){
			ok=false;
			alert("Debe escribir su password");
			Contraceña.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_password.focus();
		}

		if(ok && Contraceña.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}

		if(ok && Nombre_Empresa.value==""){
			ok=false;
			alert("Debe escribir su Nombre_Empresa");
			Nombre_Empresa.focus();
		}
		if(ok && Telefono.value==""){
			ok=false;
			alert("Debe escribir su Telefono");
			Telefono.focus();
		}
		if(ok && Numero_empresa.value==""){
			ok=false;
			alert("Debe escribir su Nombre_Empresa	");
			Numero_empresa.focus();
		}
		if(ok && Apellido.value==""){
			ok=false;
			alert("Debe escribir su Apellido	");
			Apellido.focus();
		}
		if(ok){ submit(); }
	}
}
