with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && Usuario.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			Usuario.focus();
		}
		if(ok && Contraceña.value==""){
			ok=false;
			alert("Debe escribir su Contraceña");
			Contraceña.focus();
		}
		if(ok){ submit(); }
	}
}
