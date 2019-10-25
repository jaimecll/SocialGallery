function validacion() {

	var user = document.getElementById('user').value;
	var password = document.getElementById('password').value;
	if (user == '' || password == '') {
		if (user == '') {
			document.getElementById('user').style.border = '1px solid red';
		}else{
			document.getElementById('user').style.border = '1px solid #ccc';
		}
		if (password == '') {
			document.getElementById('password').style.border = '1px solid red';
		}else{
			document.getElementById('password').style.border = '1px solid #ccc';
		}
		return false;
	}else{
		return true;
	}
}
function validacionF() {

	var Titulo = document.getElementById('Titulo').value;
	var imagen = document.getElementById('imagen').value;
	if (Titulo == '' || imagen == '') {
		if (Titulo == '') {
			document.getElementById('Titulo').style.border = '1px solid red';
		}else{
			document.getElementById('Titulo').style.border = '1px solid #ccc';
		}
		if (imagen == '') {
			document.getElementById('imagen').style.border = '1px solid red';
		}else{
			document.getElementById('imagen').style.border = '1px solid #ccc';
		}
		return false;
	}else{
		return true;
	}
}